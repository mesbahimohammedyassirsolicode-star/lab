const APIURL = 'http://localhost:8000/backend/api/api.php';
const form = document.getElementById('form-categorie');
const tbody = document.getElementById('table-categories-body');
const nom = document.getElementById('cat-nom');
const categorie = document.getElementById('cat-cate');
const demoLog = document.getElementById('demo-log');

function appendLog(message, type = 'info') {
  if (!demoLog) return;

  const row = document.createElement('div');
  row.className = 'flex items-center gap-2 rounded-md border border-slate-200 bg-slate-50 px-3 py-2 text-sm';

  const badge = document.createElement('span');
  badge.className = type === 'error'
    ? 'rounded bg-red-100 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wide text-red-700'
    : type === 'success'
      ? 'rounded bg-emerald-100 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wide text-emerald-700'
      : 'rounded bg-sky-100 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wide text-sky-700';
  badge.textContent = type;

  const text = document.createElement('span');
  text.className = 'text-slate-700';
  text.textContent = message;

  row.appendChild(badge);
  row.appendChild(text);
  demoLog.prepend(row);
}

async function loadrecipe() {
  if (!tbody) return;

  try {
    const response = await fetch(APIURL, {
      headers: {
        Accept: 'application/json',
      },
    });

    if (!response.ok) {
      throw new Error(`Erreur HTTP ${response.status}`);
    }

    const recipe = await response.json();
    const data = Array.isArray(recipe) ? recipe : Array.isArray(recipe.data) ? recipe.data : [];

    tbody.innerHTML = data.map((rec) => `
      <tr>
        <td class="p-4 text-sm text-slate-700">${rec.id}</td>
        <td class="p-4 text-sm text-slate-700">${rec.nom}</td>
        <td class="p-4 text-sm text-slate-700">${rec.categorie}</td>
      </tr>
    `).join('');
  } catch (error) {
    console.error('Erreur de chargement des recettes:', error);
    tbody.innerHTML = `
      <tr>
        <td colspan="3" class="p-4 text-sm text-red-600">
          Le backend est indisponible ou la réponse n'est pas exploitable.
        </td>
      </tr>
    `;
  }
}

if (form) {
  form.addEventListener('submit', async function (event) {
    event.preventDefault();

    if (!nom || !categorie) {
      return;
    }

    const data = {
      nom: nom.value,
      categorie: categorie.value,
    };

    try {
      const response = await fetch(APIURL, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      });

      if (!response.ok) {
        throw new Error(`Erreur HTTP ${response.status}`);
      }

      form.reset();
      await loadrecipe();
    } catch (error) {
      console.error('Erreur d’ajout:', error);
      appendLog('Ajout impossible : le serveur a rejeté la requête.', 'error');
    }
  });
}

function demoError1() {
  try {
    const missingElement = document.getElementById('missing-form');
    missingElement.addEventListener('submit', (event) => event.preventDefault());
  } catch (error) {
    appendLog(`1) ${error.name}: ${error.message}`, 'error');
  }

  const validForm = document.getElementById('form-categorie');
  if (validForm && !validForm.dataset.listenerReady) {
    validForm.dataset.listenerReady = 'true';
    validForm.addEventListener('submit', (event) => {
      event.preventDefault();
    });
  }

  appendLog('1) Correction : on vérifie l’élément DOM avant d’ajouter l’écouteur.', 'success');
}

async function demoError2() {
  try {
    const badResponse = '<!DOCTYPE html><h1>Erreur PHP</h1>';
    JSON.parse(badResponse);
  } catch (error) {
    appendLog(`2) ${error.name}: ${error.message}`, 'error');
  }

  try {
    const response = {
      ok: true,
      json: async () => ({ status: 'success', data: [{ id: 1, title: 'Article' }] }),
    };

    if (!response.ok) {
      throw new Error('Erreur HTTP');
    }

    const data = await response.json();
    if (!data || typeof data !== 'object') {
      throw new TypeError('La réponse ne contient pas de JSON valide');
    }

    appendLog('2) Correction : la réponse est validée avant de la parser en JSON.', 'success');
  } catch (error) {
    appendLog(`2) ${error.name}: ${error.message}`, 'error');
  }
}

function demoError3() {
  try {
    const posts = { status: 'success', data: [{ title: 'Mon article' }] };
    posts.forEach((post) => console.log(post.title));
  } catch (error) {
    appendLog(`3) ${error.name}: ${error.message}`, 'error');
  }

  const payload = { status: 'success', data: [{ title: 'Mon article' }, { title: 'Autre article' }] };
  const items = Array.isArray(payload) ? payload : payload.data;

  if (!Array.isArray(items)) {
    throw new TypeError('Le payload ne contient pas un tableau valide');
  }

  appendLog(`3) Correction : on extrait la donnée et on vérifie Array.isArray(${items.length}).`, 'success');
}

async function demoError4() {
  try {
    await fetch('http://localhost:9999/api/like.php');
  } catch (error) {
    appendLog(`4) ${error.name}: ${error.message}`, 'error');
  }

  try {
    const response = { ok: false, status: 500 };
    if (!response.ok) {
      throw new Error(`HTTP ${response.status}`);
    }
  } catch (error) {
    appendLog('4) Correction : on gère le réseau et les codes HTTP avant de traiter la réponse.', 'success');
  }
}

function demoError5() {
  try {
    displayArticlesBroken();
  } catch (error) {
    appendLog(`5) ${error.name}: ${error.message}`, 'error');
  }

  function displayArticlesFixed() {
    appendLog('5) Correction : la fonction est définie avant l’appel, ou importée depuis un module.', 'success');
  }

  displayArticlesFixed();
}

document.querySelectorAll('[data-demo]').forEach((button) => {
  button.addEventListener('click', () => {
    const demoName = button.getAttribute('data-demo');

    if (demoName === 'error1') demoError1();
    if (demoName === 'error2') demoError2();
    if (demoName === 'error3') demoError3();
    if (demoName === 'error4') demoError4();
    if (demoName === 'error5') demoError5();
  });
});

loadrecipe();

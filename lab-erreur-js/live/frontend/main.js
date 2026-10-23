const APIURL = 'http://localhost:8000/backend/api/api.php';
const form = document.getElementById('form-categorie');
const tbody = document.getElementById('table-categories-body');
const nom = document.getElementById('cat-nom');
const categorie = document.getElementById('cat-cate');

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
    }
  });
}

// Hidden code-only reproduction of the 5 bugs.
// These errors are intentionally present in the source but stay hidden from the UI.
(async function runHiddenLabExamples() {
  try {
    const ghostForm = document.getElementById('ghost-form');
    ghostForm.addEventListener('submit', (event) => event.preventDefault());
  } catch (error) {
    console.error('Erreur 1 cachée:', error);
  }

  try {
    const badJson = '<!DOCTYPE html><h1>Erreur PHP</h1>';
    JSON.parse(badJson);
  } catch (error) {
    console.error('Erreur 2 cachée:', error);
  }

  try {
    const posts = { status: 'success', data: [{ title: 'Mon article' }] };
    posts.forEach((post) => console.log(post.title));
  } catch (error) {
    console.error('Erreur 3 cachée:', error);
  }

  try {
    await fetch('http://localhost:9999/api/like.php');
  } catch (error) {
    console.error('Erreur 4 cachée:', error);
  }

  try {
    displayArticlesBroken();
  } catch (error) {
    console.error('Erreur 5 cachée:', error);
  }
})();

loadrecipe();

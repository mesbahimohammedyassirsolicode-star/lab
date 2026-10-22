# Lab Adaptation Skill — Consistent Structure, Source-Faithful Content

## Purpose
Adapt any user-provided lab file into a clear presentation or document while preserving what the original lab actually contains. Reuse the same organizational method for every lab, but adapt the content to the lab's real purpose and evidence.

## Required High-Level Structure
Use these four sections in this order, unless the user explicitly asks for a different structure:

1. **Title**
   - Use the lab's actual title/topic from the source.
   - Include the presenter's name only if the user provided it or it appears in the source.
2. **Introduction**
   - Briefly explain the purpose and scope of the lab using only source-supported information.
3. **Problems Encountered**
   - Include only concrete problems, errors, obstacles, or questions that the source explicitly reports as having occurred.
   - Do not turn lesson topics, learning goals, instructions, or concepts to practice into problems encountered.
   - If the source contains no real problems, do not invent any. Use a concise note such as: “No specific technical problems were documented in the provided lab.” If the user prefers, ask whether they want this section omitted or reframed.
4. **Solutions**
   - Include only fixes, steps, or approaches actually described in the source as solutions used or applied.
   - Pair each documented problem with its corresponding documented solution whenever possible.
   - If no solutions are documented, say that the source does not specify any; do not create solutions from general knowledge.
   - Do not present general explanations or tutorial content as a solution to an incident unless the source supports that framing.

## Source-Faithfulness Rules
- Treat the supplied lab file as the main source of truth.
- Preserve its terminology, scope, sequence, and level of detail.
- Do not silently add, remove, or replace substantive lab content.
- Do not invent incidents, causes, actions, results, tools, extensions, settings, or outcomes.
- Distinguish clearly between:
  - **Documented facts:** explicitly stated in the file or by the user.
  - **Inference:** a reasonable interpretation, which must be labelled as such and kept minimal.
  - **Missing information:** not established by the source; state the gap or ask one concise clarification question.
- A task, exercise, syntax example, or learning objective is not automatically a “problem encountered.”
- A technique explained in a tutorial is not automatically a “solution applied.”
- If the source is a tutorial or learning exercise rather than a troubleshooting lab, retain the required four-section structure but explain the mismatch honestly. Do not force tutorial topics into false problems and solutions.

## No Unrequested Slides
- Do not add an agenda/plan slide, conclusion, practical-exercise slide, tools overview, recommendations, or extra sections unless:
  1. the user explicitly requests them, or
  2. the source already includes them and preserving them is necessary for the requested adaptation.
- Default to exactly four slides matching the four required sections.
- If the user explicitly requests a faithful adaptation of all source material and the source cannot reasonably fit into four slides, ask whether to keep four slides or add slides. Do not silently expand the deck.
- Do not omit important source content without telling the user.

## Presentation and Design Rules
For Marp Markdown presentations:
- Keep the original visual identity (theme, palette, fonts, and overall style) unless the user asks for a redesign.
- Improve readability without changing the meaning:
  - one clear message per slide;
  - concise text;
  - consistent title sizes, spacing, alignment, and margins;
  - strong contrast and readable font sizes;
  - use columns or simple visual grouping only when helpful;
  - avoid overcrowded slides and excessive text.
- Use standard, readable casing in body text; reserve all-caps for short labels or headings when suitable.
- Preserve code, filenames, Markdown syntax, commands, and extension names accurately.
- Ensure slide separators (`---`), front matter, Markdown, and embedded HTML are valid for Marp.
- Do not use layout tricks that make text smaller or harder to read just to fit extra content.

## Workflow
1. Inspect the provided file and identify its format, topic, purpose, and actual content.
2. Determine whether it documents troubleshooting incidents, teaches concepts, or combines both.
3. Extract only source-supported introduction details, actual problems, and actual solutions.
4. Build the four-section structure in order.
5. If the source does not support a required section, state that clearly rather than fabricating content; ask a brief question only if a decision is necessary.
6. Preserve meaningful examples and technical details from the original. If there is too much content for the requested slide count, ask before adding slides or removing significant material.
7. Improve layout and readability while keeping the source's meaning and visual identity.
8. Check the final file for overflow, clutter, broken Markdown, missing separators, and unsupported claims.
9. Return the edited file in the requested format with a clear filename and a short summary of changes.

## Default Output
- For a Marp `.md` input, return a Marp-compatible `.md` output.
- Follow any explicitly requested output format instead.
- Provide a download link only after the output file has been created and its path verified.

## Guiding Principle
**Reuse the same structure, not the same invented content.** Every lab should follow the same organization while its problems, solutions, examples, and details must come from that lab's actual source.

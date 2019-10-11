 PHP library to handle an arbitrary number of events in a website

Features:

- Events are organized as an array of Trees with variable depth (depth 0 and 1 are fully supported for now).

- The Leaves at the highest depth of each Tree contain a list of events of a certain topic.

- Each Leaf is organized according to the folder scheme "topic/year/semester/":

    - "topic" (e.g., applied_math, analysis, number_theory, etc.)

    - "year"  (e.g., 2019)

    - "semester"  (e.g., "spring", "fall", "summer")

- Pages of the Leaves of each Tree can be generated

- Pages involving all Leaves of Trees for a specified time range (e.g., a week) can be generated (The all folder)

- A list of past editions of each Leaf can be handled easily

- PDF slides of each Leaf can be generated (using the beamer LaTeX package)

- LaTeX is typeset directly on the webpage through the MathJax libraries (very convenient for math formulas)

    - Titles can contain LaTeX formulas

    - Abstracts can contain LaTeX formulas and are embedded in the webpage (no annoying separate PDF or separate page opening)

- Optional: generation of navigation bars and banners through Bootstrap

- The calls can be embedded inside an arbitrary <body> field that is taken care of by the user



 Used libraries (no need to install them on the server, they are directly pointed to by our head):

 
 JavaScript and JQuery (to toggle the dropdown abstracts)
 
 MathJax (to render mathematical symbols)

 Bootstrap (to generate navigation bars and banners, optional)

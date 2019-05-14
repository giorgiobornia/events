Seminars: PHP library to handle an arbitrary number of seminars

Features:

- Generation of seminar pages is available in two ways:

    - by discipline & year & semester
    
    - by a specified time range (e.g., a week), for a given list of disciplines
    
- Colloquia can be treated as a particular instance of a discipline

- LaTeX is typeset directly on the webpage through the MathJax libraries (very convenient for math formulas)

    - Titles can contain LaTeX formulas

    - Abstracts can contain LaTeX formulas and are embedded in the webpage (no annoying separate PDF or separate page opening)

- Optional: generation of navigation bars and banners through Bootstrap

- The calls can be embedded inside an arbitrary <body> field that is taken care of by the user

- Each seminar will be grouped according to the folder scheme "discipline/year/semester/", where typically

    - "discipline" is the field of the seminar (e.g., applied_math, analysis, number_theory, etc.)

    - "year" is the current year (e.g., 2019)

    - "semester" is the current semester (e.g., "spring", "fall")

- A list of past editions can be handled easily



 Used libraries (no need to install them on the server, they are directly pointed to by our head):

 
 JavaScript and JQuery (to toggle the dropdown abstracts)
 
 MathJax (to render mathematical symbols)

 Bootstrap (to generate navigation bars and banners, optional)

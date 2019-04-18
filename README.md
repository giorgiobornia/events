Seminars: PHP library to handle an arbitrary number of seminars

Features:

- Generation of seminar pages is available in two ways:
    - by discipline & year & semester
    - by a specified time range (e.g., a week), for a given list of disciplines

- Latex is typeset directly on the webpage through the MathJax libraries (very convenient for math formulas)

- Responsive web design through Bootstrap

- Each seminar will be grouped according to the folder scheme "discipline/year/semester/", where typically

   "discipline" is the field of the seminar (e.g., AppliedMath, Analysis, NumberTheory, etc.)
   "year" is the current year (e.g., 2019)
   "semester" is the current semester (e.g., "spring", "fall")

- Past editions can be easily handled



 Used libraries (no need to install them on the server, they are directly pointed to by our head):

 Bootstrap
 JQuery
 MathJax

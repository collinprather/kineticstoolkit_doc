

<!DOCTYPE html>


<html >

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="Docutils 0.17.1: http://docutils.sourceforge.net/" />

    <title>Kinetics Toolkit &#8212; Kinetics Toolkit</title>
  
  
  
  <script data-cfasync="false">
    document.documentElement.dataset.mode = localStorage.getItem("mode") || "";
    document.documentElement.dataset.theme = localStorage.getItem("theme") || "light";
  </script>
  
  <!-- Loaded before other Sphinx assets -->
  <link href="_static/styles/theme.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
<link href="_static/styles/bootstrap.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
<link href="_static/styles/pydata-sphinx-theme.css?digest=12da95d707ffb74b382d" rel="stylesheet" />

  
  <link href="_static/vendor/fontawesome/6.1.2/css/all.min.css?digest=12da95d707ffb74b382d" rel="stylesheet" />
  <link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-solid-900.woff2" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-brands-400.woff2" />
<link rel="preload" as="font" type="font/woff2" crossorigin href="_static/vendor/fontawesome/6.1.2/webfonts/fa-regular-400.woff2" />

    <link rel="stylesheet" type="text/css" href="_static/pygments.css" />
    <link rel="stylesheet" href="_static/styles/sphinx-book-theme.css?digest=14f4ca6b54d191a8c7657f6c759bf11a5fb86285" type="text/css" />
    <link rel="stylesheet" type="text/css" href="_static/togglebutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/copybutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/mystnb.4510f1fc1dee50b3e5859aac5469c37c29e427902b24a333a5f9fcb2f0b3ac41.css" />
    <link rel="stylesheet" type="text/css" href="_static/sphinx-thebe.css" />
    <link rel="stylesheet" type="text/css" href="_static/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="_static/design-style.4045f2051d55cab465a707391d5b2007.min.css" />
  
  <!-- Pre-loaded scripts that we'll load fully later -->
  <link rel="preload" as="script" href="_static/scripts/bootstrap.js?digest=12da95d707ffb74b382d" />
<link rel="preload" as="script" href="_static/scripts/pydata-sphinx-theme.js?digest=12da95d707ffb74b382d" />

    <script data-url_root="./" id="documentation_options" src="_static/documentation_options.js"></script>
    <script src="_static/jquery.js"></script>
    <script src="_static/underscore.js"></script>
    <script src="_static/doctools.js"></script>
    <script src="_static/clipboard.min.js"></script>
    <script src="_static/copybutton.js"></script>
    <script src="_static/scripts/sphinx-book-theme.js?digest=5a5c038af52cf7bc1a1ec88eea08e6366ee68824"></script>
    <script>let toggleHintShow = 'Click to show';</script>
    <script>let toggleHintHide = 'Click to hide';</script>
    <script>let toggleOpenOnPrint = 'true';</script>
    <script src="_static/togglebutton.js"></script>
    <script>var togglebuttonSelector = '.toggle, .admonition.dropdown';</script>
    <script src="_static/design-tabs.js"></script>
    <script>const THEBE_JS_URL = "https://unpkg.com/thebe@0.8.2/lib/index.js"
const thebe_selector = ".thebe,.cell"
const thebe_selector_input = "pre"
const thebe_selector_output = ".output, .cell_output"
</script>
    <script async="async" src="_static/sphinx-thebe.js"></script>
    <script>DOCUMENTATION_OPTIONS.pagename = 'index';</script>
    <link rel="canonical" href="https://kineticstoolkit.uqam.ca/doc/index.html" />
    <link rel="shortcut icon" href="_static/favicon.ico"/>
    <link rel="index" title="Index" href="genindex.html" />
    <link rel="search" title="Search" href="search.html" />
    <link rel="next" title="Introduction" href="intro.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="docsearch:language" content="None"/>
  </head>
  
  
  <body data-bs-spy="scroll" data-bs-target=".bd-toc-nav" data-offset="180" data-bs-root-margin="0px 0px -60%" data-default-mode="">

  
  
  <a class="skip-link" href="#main-content">Skip to main content</a>
  
  <input type="checkbox"
          class="sidebar-toggle"
          name="__primary"
          id="__primary"/>
  <label class="overlay overlay-primary" for="__primary"></label>
  
  <input type="checkbox"
          class="sidebar-toggle"
          name="__secondary"
          id="__secondary"/>
  <label class="overlay overlay-secondary" for="__secondary"></label>
  
  <div class="search-button__wrapper">
    <div class="search-button__overlay"></div>
    <div class="search-button__search-container">
<form class="bd-search d-flex align-items-center"
      action="search.html"
      method="get">
  <i class="fa-solid fa-magnifying-glass"></i>
  <input type="search"
         class="form-control"
         name="q"
         id="search-input"
         placeholder="Search..."
         aria-label="Search..."
         autocomplete="off"
         autocorrect="off"
         autocapitalize="off"
         spellcheck="false"/>
  <span class="search-button__kbd-shortcut"><kbd class="kbd-shortcut__modifier">Ctrl</kbd>+<kbd>K</kbd></span>
</form></div>
  </div>
  
    <nav class="bd-header navbar navbar-expand-lg bd-navbar">
    </nav>
  
  <div class="bd-container">
    <div class="bd-container__inner bd-page-width">
      
      <div class="bd-sidebar-primary bd-sidebar">
        

  
  <div class="sidebar-header-items sidebar-primary__section">
    
    
    
    
  </div>
  
    <div class="sidebar-primary-items__start sidebar-primary__section">
        <div class="sidebar-primary-item">
  

<a class="navbar-brand logo" href="#">
  
  
  
  
    
    
      
    
    
    <img src="_static/logo.png" class="logo__image only-light" alt="Logo image"/>
    <script>document.write(`<img src="_static/logo.png" class="logo__image only-dark" alt="Logo image"/>`);</script>
  
  
</a></div>
        <div class="sidebar-primary-item"><nav class="bd-links" id="bd-docs-nav" aria-label="Main">
    <div class="bd-toc-item navbar-nav active">
        <p aria-level="2" class="caption" role="heading"><span class="caption-text">Biomechanical analysis using Python and Kinetics Toolkit</span></p>
<ul class="nav bd-sidenav">
<li class="toctree-l1"><a class="reference internal" href="intro.html">Introduction</a></li>
</ul>
<p aria-level="2" class="caption" role="heading"><span class="caption-text">Part 1: Learning Python for Biomechanics</span></p>
<ul class="nav bd-sidenav">
<li class="toctree-l1 has-children"><a class="reference internal" href="getting_started.html">1. Getting started</a><input class="toctree-checkbox" id="toctree-checkbox-1" name="toctree-checkbox-1" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-1"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="getting_started_installing.html">1.1. Installing Python, Spyder and Kinetics Toolkit</a></li>
<li class="toctree-l2"><a class="reference internal" href="getting_started_configuring_spyder.html">1.2. Configuring Spyder</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="python_for_biomechanics.html">2. The Python language</a><input class="toctree-checkbox" id="toctree-checkbox-2" name="toctree-checkbox-2" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-2"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_using_spyder.html">2.1. Using Spyder</a><input class="toctree-checkbox" id="toctree-checkbox-3" name="toctree-checkbox-3" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-3"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="spyder_interface.html">2.1.1. Spyder interface</a></li>
<li class="toctree-l3"><a class="reference internal" href="spyder_console.html">2.1.2. Writing code in the console</a></li>
<li class="toctree-l3"><a class="reference internal" href="spyder_script.html">2.1.3. Writing code in a script</a></li>
<li class="toctree-l3"><a class="reference internal" href="spyder_cells.html">2.1.4. Code cell</a></li>
<li class="toctree-l3"><a class="reference internal" href="spyder_help.html">2.1.5. Getting help</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_basics.html">2.2. Python basics</a><input class="toctree-checkbox" id="toctree-checkbox-4" name="toctree-checkbox-4" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-4"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_arithmetics.html">2.2.1. Arithmetic operations</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_print.html">2.2.2. Printing to the console</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_comments.html">2.2.3. Comments</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_variables.html">2.2.4. Variables</a><input class="toctree-checkbox" id="toctree-checkbox-5" name="toctree-checkbox-5" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-5"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_basics_exercise1.html">💪 Python basics (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_basics_exercise2.html">💪 Python basics (2)</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_numbers.html">2.3. Numbers</a><input class="toctree-checkbox" id="toctree-checkbox-6" name="toctree-checkbox-6" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-6"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_int_float.html">2.3.1. Integers and floats</a><input class="toctree-checkbox" id="toctree-checkbox-7" name="toctree-checkbox-7" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-7"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_int_float_exercise.html">💪 Integers and floats</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_int_float_arithmetics.html">2.3.2. Arithmetic operations between integers and floats</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_strings.html">2.4. Strings</a><input class="toctree-checkbox" id="toctree-checkbox-8" name="toctree-checkbox-8" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-8"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_strings_quotes.html">2.4.1. Creating strings using quotes</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_strings_backslash.html">2.4.2. Backslash</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_strings_triple_quotes.html">2.4.3. Creating strings using triple-quotes</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_strings_long_strings.html">2.4.4. Creating long strings</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_strings_fstrings.html">2.4.5. Including variables in strings using f-strings</a><input class="toctree-checkbox" id="toctree-checkbox-9" name="toctree-checkbox-9" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-9"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_strings_exercise.html">💪 Strings</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_strings_input.html">2.4.6. User input</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_functions.html">2.5. Functions</a><input class="toctree-checkbox" id="toctree-checkbox-10" name="toctree-checkbox-10" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-10"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_functions_syntax.html">2.5.1. Function syntax</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_functions_arguments.html">2.5.2. Argument names</a><input class="toctree-checkbox" id="toctree-checkbox-11" name="toctree-checkbox-11" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-11"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_functions_arguments_exercise.html">💪 Function arguments</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_functions_return.html">2.5.3. Return values</a><input class="toctree-checkbox" id="toctree-checkbox-12" name="toctree-checkbox-12" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-12"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_functions_return_exercise1.html">💪 Function return values (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_functions_return_exercise2.html">💪 Function return values (2)</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_functions_docstrings.html">2.5.4. Docstrings</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_functions_type_annotations.html">2.5.5. Type annotations</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_functions_positional_keywords.html">2.5.6. Positional and keyword arguments</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_functions_default_values.html">2.5.7. Default values</a><input class="toctree-checkbox" id="toctree-checkbox-13" name="toctree-checkbox-13" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-13"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_functions_default_values_exercise.html">💪 Function argument’s default values</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_conditions.html">2.6. Conditions and booleans</a><input class="toctree-checkbox" id="toctree-checkbox-14" name="toctree-checkbox-14" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-14"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_conditions_boolean.html">2.6.1. Boolean and comparisons</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_conditions_if_elif_else.html">2.6.2. Conditional code</a><input class="toctree-checkbox" id="toctree-checkbox-15" name="toctree-checkbox-15" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-15"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_conditions_if_elif_else_exercise.html">💪 Conditions: if/elif/else</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_conditions_logical_operators.html">2.6.3. Logical operators</a><input class="toctree-checkbox" id="toctree-checkbox-16" name="toctree-checkbox-16" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-16"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_conditions_boolean_operators_exercise.html">💪 Conditions: boolean operators</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_lists.html">2.7. Lists and tuples</a><input class="toctree-checkbox" id="toctree-checkbox-17" name="toctree-checkbox-17" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-17"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="python_lists_creating.html">2.7.1. Creating lists and tuples</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_lists_indexing.html">2.7.2. Indexing a list</a><input class="toctree-checkbox" id="toctree-checkbox-18" name="toctree-checkbox-18" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-18"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_lists_indexing_exercise1.html">💪 Indexing lists (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_lists_indexing_exercise2.html">💪 Indexing lists (2)</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_lists_slicing.html">2.7.3. Slicing lists</a><input class="toctree-checkbox" id="toctree-checkbox-19" name="toctree-checkbox-19" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-19"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_lists_slicing_exercise1.html">💪 Slicing lists (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_lists_slicing_exercise2.html">💪 Slicing lists (2)</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_strings_slicing.html">2.7.4. Indexing and slicing strings</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_lists_modify.html">2.7.5. Modifying lists</a><input class="toctree-checkbox" id="toctree-checkbox-20" name="toctree-checkbox-20" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-20"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_lists_modify_exercise1.html">💪 Modifying lists (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_lists_modify_exercise2.html">💪 Modifying lists (2)</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_looping.html">2.8. Looping</a><input class="toctree-checkbox" id="toctree-checkbox-21" name="toctree-checkbox-21" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-21"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_while.html">2.8.1. Looping using <strong>while</strong></a><input class="toctree-checkbox" id="toctree-checkbox-22" name="toctree-checkbox-22" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-22"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_while_exercise1.html">💪 Looping using <strong>while</strong> (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_while_exercise2.html">💪 Looping using <strong>while</strong> (2)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_while_exercise3.html">💪 Looping using <strong>while</strong> (3)</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_for.html">2.8.2. Looping using <strong>for</strong></a><input class="toctree-checkbox" id="toctree-checkbox-23" name="toctree-checkbox-23" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-23"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_for_exercise.html">💪 Looping using <strong>for</strong></a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_for_range.html">2.8.3. Looping using <strong>for</strong> and <strong>range</strong></a><input class="toctree-checkbox" id="toctree-checkbox-24" name="toctree-checkbox-24" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-24"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_for_range_exercise1.html">💪 Looping using <strong>for</strong> and <strong>range</strong> (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_for_range_exercise2.html">💪 Looping using <strong>for</strong> and <strong>range</strong> (2)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_for_range_exercise3.html">💪 Looping using <strong>for</strong> and <strong>range</strong> (3)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_for_range_exercise4.html">💪 Looping using <strong>for</strong> and <strong>range</strong> (4)</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="python_for_writing_list.html">2.8.4. Modifying a list while looping</a></li>
<li class="toctree-l3"><a class="reference internal" href="python_for_enumerate.html">2.8.5. Looping a list using <strong>for</strong> and <strong>enumerate</strong></a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="python_dicts.html">2.9. Dictionaries</a><input class="toctree-checkbox" id="toctree-checkbox-25" name="toctree-checkbox-25" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-25"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_dicts_creating_accessing.html">2.9.1. Creating dictionaries and accessing/modifying entries</a><input class="toctree-checkbox" id="toctree-checkbox-26" name="toctree-checkbox-26" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-26"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_dicts_creating_accessing_exercise1.html">💪 Creating and accessing dictionaries (1)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_dicts_creating_accessing_exercise2.html">💪 Creating and accessing dictionaries (2)</a></li>
<li class="toctree-l4"><a class="reference internal" href="python_dicts_creating_accessing_exercise3.html">💪 Creating and accessing dictionaries (3)</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_dicts_modifying.html">2.9.2. Adding and removing entries</a><input class="toctree-checkbox" id="toctree-checkbox-27" name="toctree-checkbox-27" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-27"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_dicts_modifying_exercise.html">💪 Adding entries to dictionaries</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="python_dicts_looping.html">2.9.3. Looping through a dictionary’s entries</a><input class="toctree-checkbox" id="toctree-checkbox-28" name="toctree-checkbox-28" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-28"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="python_dicts_looping_exercise.html">💪 Looping through a dictionary</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="python_exercises.html">2.10. Exercises</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="matplotlib.html">3. Matplotlib</a><input class="toctree-checkbox" id="toctree-checkbox-29" name="toctree-checkbox-29" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-29"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_import.html">3.1. Importing <strong>pyplot</strong></a></li>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_plot.html">3.2. Line plots</a></li>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_plot_multiple.html">3.3. Plotting multiple series</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="matplotlib_titles_labels.html">3.4. Title, axis labels, legend and grid</a><input class="toctree-checkbox" id="toctree-checkbox-30" name="toctree-checkbox-30" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-30"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_plot_titles_labels_exercise1.html">3.4.1. 💪 Plotting a series (1)</a></li>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_plot_titles_labels_exercise2.html">3.4.2. 💪 Plotting a series (2)</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_subplot.html">3.5. Multiple plots side by side</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="matplotlib_style.html">3.6. Markers, line style and colours</a><input class="toctree-checkbox" id="toctree-checkbox-31" name="toctree-checkbox-31" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-31"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_style_exercise.html">3.6.1. 💪 Plot styling</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_axis.html">3.7. Setting the axes limits</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="matplotlib_ginput.html">3.8. Graphical input</a><input class="toctree-checkbox" id="toctree-checkbox-32" name="toctree-checkbox-32" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-32"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="matplotlib_ginput_exercise.html">3.8.1. 💪 Graphical input</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="matplotlib_exercises.html">3.9. Exercises</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="numpy.html">4. NumPy</a><input class="toctree-checkbox" id="toctree-checkbox-33" name="toctree-checkbox-33" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-33"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="numpy_import.html">4.1. Importing NumPy</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_ndarray.html">4.2. Arrays</a><input class="toctree-checkbox" id="toctree-checkbox-34" name="toctree-checkbox-34" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-34"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_ndarray_introduction.html">4.2.1. Introduction to arrays</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_ndarray_creating_from_lists.html">4.2.2. Creating arrays from lists</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="numpy_ndarray_creating_zeros_ones.html">4.2.3. Creating arrays of zeros or ones</a><input class="toctree-checkbox" id="toctree-checkbox-35" name="toctree-checkbox-35" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-35"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="numpy_ndarray_creating_zeros_ones_exercise1.html">💪 Exercise 1</a></li>
<li class="toctree-l4"><a class="reference internal" href="numpy_ndarray_creating_zeros_ones_exercise2.html">💪 Exercise 2</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="numpy_ndarray_creating_linspace.html">4.2.4. Creating linearly spaced arrays</a><input class="toctree-checkbox" id="toctree-checkbox-36" name="toctree-checkbox-36" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-36"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="numpy_ndarray_creating_linspace_exercise1.html">💪 Exercise 1</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_arithmetics.html">4.3. Arithmetics</a><input class="toctree-checkbox" id="toctree-checkbox-37" name="toctree-checkbox-37" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-37"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_arithmetics_exercise.html">4.3.1. 💪 Exercise</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_matmul.html">4.3.2. Matrix multiplication</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_trigonometry.html">4.4. Trigonometry</a><input class="toctree-checkbox" id="toctree-checkbox-38" name="toctree-checkbox-38" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-38"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_trigonometry_exercise1.html">4.4.1. 💪 Exercise 1</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_trigonometry_exercise2.html">4.4.2. 💪 Exercise 2</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="numpy_inf_nan.html">4.5. Infinity and Not-A-Number (nan)</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_statistics.html">4.6. Statistical functions</a><input class="toctree-checkbox" id="toctree-checkbox-39" name="toctree-checkbox-39" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-39"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_statistics_exercise.html">4.6.1. 💪 Exercise</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_comparisons.html">4.7. Comparisons</a><input class="toctree-checkbox" id="toctree-checkbox-40" name="toctree-checkbox-40" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-40"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_comparisons_exercise.html">4.7.1. 💪 Exercise</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="numpy_logical_operators.html">4.8. Logical operators</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_indexing_slicing_1d.html">4.9. Indexing and slicing unidimensional arrays</a><input class="toctree-checkbox" id="toctree-checkbox-41" name="toctree-checkbox-41" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-41"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_indexing_slicing_1d_exercise.html">4.9.1. 💪 Exercise</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_filtering_1d.html">4.10. Filtering</a><input class="toctree-checkbox" id="toctree-checkbox-42" name="toctree-checkbox-42" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-42"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_filtering_1d_exercise1.html">4.10.1. 💪 Exercise 1</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_filtering_1d_exercise2.html">4.10.2. 💪 Exercise 2</a></li>
<li class="toctree-l3"><a class="reference internal" href="numpy_filtering_1d_exercise3.html">4.10.3. 💪 Exercise 3</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="numpy_nd.html">4.11. Multidimensional arrays</a></li>
<li class="toctree-l2"><a class="reference internal" href="numpy_indexing_nd.html">4.12. Indexing multidimensional arrays</a></li>
<li class="toctree-l2"><a class="reference internal" href="numpy_slicing_nd.html">4.13. Slicing multidimensional arrays</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="numpy_filtering_nd.html">4.14. Filtering multidimensional arrays</a><input class="toctree-checkbox" id="toctree-checkbox-43" name="toctree-checkbox-43" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-43"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="numpy_filtering_nd_exercise.html">4.14.1. 💪 Exercise</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="numpy_exercises.html">4.15. Exercises</a></li>
</ul>
</li>
</ul>
<p aria-level="2" class="caption" role="heading"><span class="caption-text">Part 2: Going further with Kinetics Toolkit</span></p>
<ul class="nav bd-sidenav">
<li class="toctree-l1"><a class="reference internal" href="kineticstoolkit.html">1. Kinetics Toolkit</a></li>
<li class="toctree-l1"><a class="reference internal" href="ktk_importing.html">2. Importing Kinetics Toolkit</a></li>
<li class="toctree-l1 has-children"><a class="reference internal" href="timeseries.html">3. Analyzing time-varying data</a><input class="toctree-checkbox" id="toctree-checkbox-44" name="toctree-checkbox-44" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-44"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="timeseries_basics.html">3.1. TimeSeries</a></li>
<li class="toctree-l2"><a class="reference internal" href="timeseries_manipulating.html">3.2. Manipulating TimeSeries</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="filters.html">3.3. Filtering</a><input class="toctree-checkbox" id="toctree-checkbox-45" name="toctree-checkbox-45" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-45"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="filters_butter.html">3.3.1. Butterworth filter</a></li>
<li class="toctree-l3"><a class="reference internal" href="filters_smooth_savgol.html">3.3.2. Moving average and Savitsky-Golay</a></li>
<li class="toctree-l3"><a class="reference internal" href="filters_median.html">3.3.3. Removing artefacts using a median filter</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="cycles.html">3.4. Working with cycles</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="files.html">4. Reading and writing data files</a><input class="toctree-checkbox" id="toctree-checkbox-46" name="toctree-checkbox-46" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-46"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="files_c3d.html">4.1. Reading and writing C3D files</a></li>
<li class="toctree-l2"><a class="reference internal" href="kinematics_load_visualize.html">4.2. Reading and visualizing markers in 3D</a></li>
<li class="toctree-l2"><a class="reference internal" href="timeseries_dataframes.html">4.3. Reading and writing Excel, CVS and other files</a></li>
<li class="toctree-l2"><a class="reference internal" href="loadsave.html">4.4. Saving and loading data in ktk.zip format</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="geometry.html">5. 3D rigid body geometry</a><input class="toctree-checkbox" id="toctree-checkbox-47" name="toctree-checkbox-47" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-47"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="geometry_basics.html">5.1. Coordinates: points, vectors and frames</a></li>
<li class="toctree-l2"><a class="reference internal" href="geometry_transform_moving_coordinates.html">5.2. The homogeneous transform: rotating and translating coordinates</a></li>
<li class="toctree-l2"><a class="reference internal" href="geometry_transform_changing_coordinate_system.html">5.3. The homogeneous transform: mapping coordinates to other coordinate systems</a></li>
<li class="toctree-l2"><a class="reference internal" href="geometry_kinematic_chains.html">5.4. Kinematic chains</a></li>
<li class="toctree-l2"><a class="reference internal" href="geometry_angles.html">5.5. Extracting angles</a></li>
<li class="toctree-l2"><a class="reference internal" href="geometry_dimension_conventions.html">5.6. Dimension conventions</a></li>
</ul>
</li>
<li class="toctree-l1 has-children"><a class="reference internal" href="kinematics.html">6. Kinematics analysis</a><input class="toctree-checkbox" id="toctree-checkbox-48" name="toctree-checkbox-48" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-48"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="kinematics_joint_angles.html">6.1. Calculating joint angles from a kinematic acquisition</a></li>
<li class="toctree-l2"><a class="reference internal" href="kinematics_reconstructing_occluded_markers.html">6.2. Reconstructing occluded markers</a></li>
<li class="toctree-l2"><a class="reference internal" href="kinematics_reconstructing_removed_markers.html">6.3. Reconstructing removed markers</a></li>
<li class="toctree-l2"><a class="reference internal" href="kinematics_reconstructing_probed_points.html">6.4. Reconstructing probed points</a></li>
</ul>
</li>
</ul>
<p aria-level="2" class="caption" role="heading"><span class="caption-text">Reference</span></p>
<ul class="nav bd-sidenav">
<li class="toctree-l1"><a class="reference internal" href="ktk_overview.html">An overview of Kinetics Toolkit</a></li>
<li class="toctree-l1 has-children"><a class="reference internal" href="api_reference.html">📘 API Reference</a><input class="toctree-checkbox" id="toctree-checkbox-49" name="toctree-checkbox-49" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-49"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="ktk_conventions.html">Conventions</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_classes.html">Classes</a><input class="toctree-checkbox" id="toctree-checkbox-50" name="toctree-checkbox-50" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-50"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.TimeSeries.html">ktk.TimeSeries</a><input class="toctree-checkbox" id="toctree-checkbox-51" name="toctree-checkbox-51" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-51"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.add_data_info.html">ktk.TimeSeries.add_data_info</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.add_event.html">ktk.TimeSeries.add_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.copy.html">ktk.TimeSeries.copy</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.count_events.html">ktk.TimeSeries.count_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.fill_missing_samples.html">ktk.TimeSeries.fill_missing_samples</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.from_dataframe.html">ktk.TimeSeries.from_dataframe</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_event_index.html">ktk.TimeSeries.get_event_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_event_time.html">ktk.TimeSeries.get_event_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_after_time.html">ktk.TimeSeries.get_index_after_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_at_time.html">ktk.TimeSeries.get_index_at_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_index_before_time.html">ktk.TimeSeries.get_index_before_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_sample_rate.html">ktk.TimeSeries.get_sample_rate</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_subset.html">ktk.TimeSeries.get_subset</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_event.html">ktk.TimeSeries.get_ts_after_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_index.html">ktk.TimeSeries.get_ts_after_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_after_time.html">ktk.TimeSeries.get_ts_after_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_at_event.html">ktk.TimeSeries.get_ts_at_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_at_time.html">ktk.TimeSeries.get_ts_at_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_event.html">ktk.TimeSeries.get_ts_before_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_index.html">ktk.TimeSeries.get_ts_before_index</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_before_time.html">ktk.TimeSeries.get_ts_before_time</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_events.html">ktk.TimeSeries.get_ts_between_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_indexes.html">ktk.TimeSeries.get_ts_between_indexes</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.get_ts_between_times.html">ktk.TimeSeries.get_ts_between_times</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.isnan.html">ktk.TimeSeries.isnan</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.merge.html">ktk.TimeSeries.merge</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.plot.html">ktk.TimeSeries.plot</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_data.html">ktk.TimeSeries.remove_data</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_data_info.html">ktk.TimeSeries.remove_data_info</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_duplicate_events.html">ktk.TimeSeries.remove_duplicate_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.remove_event.html">ktk.TimeSeries.remove_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.rename_data.html">ktk.TimeSeries.rename_data</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.rename_event.html">ktk.TimeSeries.rename_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.resample.html">ktk.TimeSeries.resample</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.shift.html">ktk.TimeSeries.shift</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.sort_events.html">ktk.TimeSeries.sort_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.sync_event.html">ktk.TimeSeries.sync_event</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.to_dataframe.html">ktk.TimeSeries.to_dataframe</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.trim_events.html">ktk.TimeSeries.trim_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_edit_events.html">ktk.TimeSeries.ui_edit_events</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_get_ts_between_clicks.html">ktk.TimeSeries.ui_get_ts_between_clicks</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.TimeSeries.ui_sync.html">ktk.TimeSeries.ui_sync</a></li>
</ul>
</li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.TimeSeriesEvent.html">ktk.TimeSeriesEvent</a></li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.Player.html">ktk.Player</a><input class="toctree-checkbox" id="toctree-checkbox-52" name="toctree-checkbox-52" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-52"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.Player.close.html">ktk.Player.close</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.Player.to_html5.html">ktk.Player.to_html5</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_functions.html">Functions</a><input class="toctree-checkbox" id="toctree-checkbox-53" name="toctree-checkbox-53" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-53"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.import_extensions.html">ktk.import_extensions</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.load.html">ktk.load</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.save.html">ktk.save</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.read_c3d.html">ktk.read_c3d</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.write_c3d.html">ktk.write_c3d</a></li>
<li class="toctree-l3"><a class="reference internal" href="api/ktk.change_defaults.html">ktk.change_defaults</a></li>
</ul>
</li>
<li class="toctree-l2 has-children"><a class="reference internal" href="api_modules.html">Modules</a><input class="toctree-checkbox" id="toctree-checkbox-54" name="toctree-checkbox-54" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-54"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.cycles.html">ktk.cycles</a><input class="toctree-checkbox" id="toctree-checkbox-55" name="toctree-checkbox-55" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-55"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.detect_cycles.html">ktk.cycles.detect_cycles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.most_repeatable_cycles.html">ktk.cycles.most_repeatable_cycles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.stack.html">ktk.cycles.stack</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.time_normalize.html">ktk.cycles.time_normalize</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.cycles.unstack.html">ktk.cycles.unstack</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.doc.html">ktk.doc</a><input class="toctree-checkbox" id="toctree-checkbox-56" name="toctree-checkbox-56" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-56"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.doc.download.html">ktk.doc.download</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.filters.html">ktk.filters</a><input class="toctree-checkbox" id="toctree-checkbox-57" name="toctree-checkbox-57" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-57"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.butter.html">ktk.filters.butter</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.deriv.html">ktk.filters.deriv</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.median.html">ktk.filters.median</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.savgol.html">ktk.filters.savgol</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.filters.smooth.html">ktk.filters.smooth</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.geometry.html">ktk.geometry</a><input class="toctree-checkbox" id="toctree-checkbox-58" name="toctree-checkbox-58" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-58"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.create_frames.html">ktk.geometry.create_frames</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.create_transforms.html">ktk.geometry.create_transforms</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_angles.html">ktk.geometry.get_angles</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_global_coordinates.html">ktk.geometry.get_global_coordinates</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.get_local_coordinates.html">ktk.geometry.get_local_coordinates</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.isnan.html">ktk.geometry.isnan</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.matmul.html">ktk.geometry.matmul</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.geometry.register_points.html">ktk.geometry.register_points</a></li>
</ul>
</li>
<li class="toctree-l3 has-children"><a class="reference internal" href="api/ktk.kinematics.html">ktk.kinematics</a><input class="toctree-checkbox" id="toctree-checkbox-59" name="toctree-checkbox-59" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-59"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.create_cluster.html">ktk.kinematics.create_cluster</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.extend_cluster.html">ktk.kinematics.extend_cluster</a></li>
<li class="toctree-l4"><a class="reference internal" href="api/ktk.kinematics.track_cluster.html">ktk.kinematics.track_cluster</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2"><a class="reference internal" href="extensions.html">Extensions</a></li>
<li class="toctree-l2"><a class="reference internal" href="dev_extensions.html">Developing extensions</a></li>
<li class="toctree-l2"><a class="reference internal" href="ktk_release_notes.html">Release Notes</a></li>
</ul>
</li>
</ul>
<p aria-level="2" class="caption" role="heading"><span class="caption-text">Contributing</span></p>
<ul class="nav bd-sidenav">
<li class="toctree-l1 has-children"><a class="reference internal" href="dev_contributing.html">How to contribute</a><input class="toctree-checkbox" id="toctree-checkbox-60" name="toctree-checkbox-60" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-60"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l2"><a class="reference internal" href="ktk_citing.html">Citing</a></li>
<li class="toctree-l2 has-children"><a class="reference internal" href="dev_developing.html">Developing</a><input class="toctree-checkbox" id="toctree-checkbox-61" name="toctree-checkbox-61" type="checkbox"/><label class="toctree-toggle" for="toctree-checkbox-61"><i class="fa-solid fa-chevron-down"></i></label><ul>
<li class="toctree-l3"><a class="reference internal" href="dev_rules.html">Development rules</a></li>
<li class="toctree-l3"><a class="reference internal" href="dev_code_of_conduct.html">Code of conduct</a></li>
<li class="toctree-l3"><a class="reference internal" href="dev_installing_from_github.html">Installing from GitHub</a></li>
<li class="toctree-l3"><a class="reference internal" href="dev_coding_style.html">Coding style</a></li>
</ul>
</li>
<li class="toctree-l2"><a class="reference external" href="https://github.com/felixchenier/kineticstoolkit">GitHub repository</a></li>
</ul>
</li>
</ul>

    </div>
</nav></div>
    </div>
  
  
  <div class="sidebar-primary-items__end sidebar-primary__section">
  </div>
  
  <div id="rtd-footer-container"></div>


      </div>
      
      <main id="main-content" class="bd-main">
        
        

<div class="sbt-scroll-pixel-helper"></div>

          <div class="bd-content">
            <div class="bd-article-container">
              
              <div class="bd-header-article">
<div class="header-article-items header-article__inner">
  
    <div class="header-article-items__start">
      
        <div class="header-article-item"><label class="sidebar-toggle primary-toggle btn btn-sm" for="__primary" title="Toggle primary sidebar" data-bs-placement="bottom" data-bs-toggle="tooltip">
  <span class="fa-solid fa-bars"></span>
</label></div>
      
    </div>
  
  
    <div class="header-article-items__end">
      
        <div class="header-article-item">

<div class="article-header-buttons">





<div class="dropdown dropdown-download-buttons">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Download this page">
    <i class="fas fa-download"></i>
  </button>
  <ul class="dropdown-menu">
      
      
      
      <li><a href="_sources/index.md" target="_blank"
   class="btn btn-sm btn-download-source-button dropdown-item"
   title="Download source file"
   data-bs-placement="left" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-file"></i>
  </span>
<span class="btn__text-container">.md</span>
</a>
</li>
      
      
      
      
      <li>
<button onclick="window.print()"
  class="btn btn-sm btn-download-pdf-button dropdown-item"
  title="Print to PDF"
  data-bs-placement="left" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-file-pdf"></i>
  </span>
<span class="btn__text-container">.pdf</span>
</button>
</li>
      
  </ul>
</div>




<button onclick="toggleFullScreen()"
  class="btn btn-sm btn-fullscreen-button"
  title="Fullscreen mode"
  data-bs-placement="bottom" data-bs-toggle="tooltip"
>
  

<span class="btn__icon-container">
  <i class="fas fa-expand"></i>
  </span>

</button>


<script>
document.write(`
  <button class="theme-switch-button btn btn-sm btn-outline-primary navbar-btn rounded-circle" title="light/dark" aria-label="light/dark" data-bs-placement="bottom" data-bs-toggle="tooltip">
    <span class="theme-switch" data-mode="light"><i class="fa-solid fa-sun"></i></span>
    <span class="theme-switch" data-mode="dark"><i class="fa-solid fa-moon"></i></span>
    <span class="theme-switch" data-mode="auto"><i class="fa-solid fa-circle-half-stroke"></i></span>
  </button>
`);
</script>

<script>
document.write(`
  <button class="btn btn-sm navbar-btn search-button search-button__button" title="Search" aria-label="Search" data-bs-placement="bottom" data-bs-toggle="tooltip">
    <i class="fa-solid fa-magnifying-glass"></i>
  </button>
`);
</script>

</div></div>
      
    </div>
  
</div>
</div>
              
              

<div id="jb-print-docs-body" class="onlyprint">
    <h1>Kinetics Toolkit</h1>
    <!-- Table of contents -->
    <div id="print-main-content">
        <div id="jb-print-toc">
            
        </div>
    </div>
</div>

              
                
<div id="searchbox"></div>
                <article class="bd-article" role="main">
                  
  <section class="tex2jax_ignore mathjax_ignore" id="kinetics-toolkit">
<h1>Kinetics Toolkit<a class="headerlink" href="#kinetics-toolkit" title="Permalink to this headline">#</a></h1>
<div class="sd-container-fluid sd-sphinx-override sd-mb-4 docutils">
<div class="sd-row sd-g-2 sd-g-xs-2 sd-g-sm-2 sd-g-md-2 sd-g-lg-2 docutils">
<div class="sd-col sd-d-flex-row docutils">
<div class="sd-card sd-sphinx-override sd-w-100 sd-shadow-sm docutils">
<div class="sd-card-body docutils">
<p class="sd-card-text"><strong>is a free online resource</strong> for students and researchers to learn about 3D biomechanical data processing using Python.</p>
<ul class="simple">
<li><p class="sd-card-text"><a class="reference internal" href="getting_started.html"><span class="doc std std-doc">Getting started</span></a></p></li>
<li><p class="sd-card-text"><a class="reference internal" href="python_for_biomechanics.html"><span class="doc std std-doc">The Python language</span></a></p></li>
<li><p class="sd-card-text"><a class="reference internal" href="kineticstoolkit.html"><span class="doc std std-doc">Kinetics Toolkit</span></a></p></li>
</ul>
</div>
</div>
</div>
<div class="sd-col sd-d-flex-row docutils">
<div class="sd-card sd-sphinx-override sd-w-100 sd-shadow-sm docutils">
<div class="sd-card-body docutils">
<p class="sd-card-text"><strong>is an open-source Python package</strong> to analyze biomechanical data with the users knowing what they are doing. No magical black box.</p>
<ul class="simple">
<li><p class="sd-card-text"><a class="reference internal" href="timeseries.html"><span class="doc std std-doc">Analyzing time-varying data</span></a></p></li>
<li><p class="sd-card-text"><a class="reference internal" href="files.html"><span class="doc std std-doc">Reading and writing data files</span></a></p></li>
<li><p class="sd-card-text"><a class="reference internal" href="geometry.html"><span class="doc std std-doc">3D rigid body geometry</span></a></p></li>
<li><p class="sd-card-text"><a class="reference internal" href="kinematics.html"><span class="doc std std-doc">Kinematics analysis</span></a></p></li>
</ul>
<div class="docutils">
<p class="sd-card-text"><a href="https://doi.org/10.21105/joss.03714"><img src="https://joss.theoj.org/papers/10.21105/joss.03714/status.svg" alt="JOSS"></a>
<a href="https://anaconda.org/conda-forge/kineticstoolkit"><img src="https://anaconda.org/conda-forge/kineticstoolkit/badges/version.svg" alt="Anaconda"></a>
<a href="https://anaconda.org/conda-forge/kineticstoolkit"><img src="https://anaconda.org/conda-forge/kineticstoolkit/badges/latest_release_date.svg" alt="Latest release"></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<aside class="sidebar">
<div class="style-max-height-600px docutils">
<h3>
<a href="https://github.com/felixchenier/kineticstoolkit/discussions">Announcements <img src="_static/images/github-logo.png" alt="Follow on GitHub" width="20px"></a>
<a href="https://github.com/felixchenier/kineticstoolkit/discussions/categories/announcements.atom"><img src="_static/images/rss-icon.png" alt="Subscribe to RSS/Atom Feed" width="20px"></a>
<a href="https://twitter.com/KineticsToolkit"><img src="_static/images/twitter-logo.png" alt="Follow on Twitter" width="20px"></a>
</h3>
<?php include("/home/kinetics/public_html/rss/rss.php");?>
<link rel="alternate" type="application/rss+html" title="Subscribe to Kinetics Toolkit Announcements" href="https://github.com/felixchenier/kineticstoolkit/discussions/categories/announcements.atom" />
</div>
</aside>
<div class="highlight-default notranslate"><div class="highlight"><pre><span></span><span class="kn">import</span> <span class="nn">kineticstoolkit.lab</span> <span class="k">as</span> <span class="nn">ktk</span>
<span class="n">markers</span> <span class="o">=</span> <span class="n">ktk</span><span class="o">.</span><span class="n">read_c3d</span><span class="p">(</span><span class="s2">&quot;filename.c3d&quot;</span><span class="p">)[</span><span class="s2">&quot;Points&quot;</span><span class="p">]</span>
<span class="n">ktk</span><span class="o">.</span><span class="n">Player</span><span class="p">(</span><span class="n">markers</span><span class="p">,</span> <span class="n">interconnections</span><span class="o">=</span><span class="n">interconnections</span><span class="p">)</span>
</pre></div>
</div>
<p><a class="reference internal" href="kinematics_load_visualize.html"><span class="doc std std-doc"><img alt="example_result -width:half" src="_images/frontpage.gif" /></span></a></p>
<p><a class="reference internal" href="kinematics_load_visualize.html"><span class="doc std std-doc">Click here for a complete tutorials on marker visualization</span></a></p>
<p><a class="reference external" href="https://github.com/felixchenier/kineticstoolkit/discussions">Questions, suggestions, discussions and collaborations</a> are highly welcome. Please see the numerous ways you can <a class="reference internal" href="dev_contributing.html"><span class="doc std std-doc">contribute</span></a> to this project.</p>
<hr class="docutils" />
<div class="style-align-center docutils">
<p><a href="https://felixchenier.uqam.ca"><img alt="-width:narrow" src="_static/images/logo_mosa.png"></a>
   <a href="https://uqam.ca"><img alt="-width:narrower" src="_static/images/logo_uqam.png"></a>
   <a href="https://crir.ca"><img alt="-width:narrower" src="_static/images/logo_crir.jpg"></a></p>
</div>
<div class="toctree-wrapper compound">
</div>
<div class="toctree-wrapper compound">
</div>
<div class="toctree-wrapper compound">
</div>
<div class="toctree-wrapper compound">
</div>
<div class="toctree-wrapper compound">
</div>
</section>

    <script type="text/x-thebe-config">
    {
        requestKernel: true,
        binderOptions: {
            repo: "binder-examples/jupyter-stacks-datascience",
            ref: "master",
        },
        codeMirrorConfig: {
            theme: "abcdef",
            mode: "python"
        },
        kernelOptions: {
            name: "python3",
            path: "./."
        },
        predefinedOutput: true
    }
    </script>
    <script>kernelName = 'python3'</script>

                </article>
              

              
              
                <footer class="bd-footer-article">
                  <!-- Previous / next buttons -->
<div class="prev-next-area">
    <a class="right-next"
       href="intro.html"
       title="next page">
      <div class="prev-next-info">
        <p class="prev-next-subtitle">next</p>
        <p class="prev-next-title">Introduction</p>
      </div>
      <i class="fa-solid fa-angle-right"></i>
    </a>
</div>
                </footer>
              
            </div>
            
            
              
            
          </div>
          <footer class="bd-footer-content">
            <div class="bd-footer-content__inner">
<div class="bd-footer-content__inner container">
  
  <div class="footer-item">
    
<p class="component-author">
By Félix Chénier
</p>

  </div>
  
  <div class="footer-item">
    
  <p class="copyright">
    
      © Copyright 2020-2023.
      <br/>
    
  </p>

  </div>
  
  <div class="footer-item">
    
  </div>
  
  <div class="footer-item">
    
<div class="extra_footer">
  This website is built using <a href='https://jupyterbook.org'>jupyter-book</a>.
</div>
  </div>
  
</div></div>
          </footer>
        

      </main>
    </div>
  </div>
  
  <!-- Scripts loaded after <body> so the DOM is not blocked -->
  <script src="_static/scripts/bootstrap.js?digest=12da95d707ffb74b382d"></script>
<script src="_static/scripts/pydata-sphinx-theme.js?digest=12da95d707ffb74b382d"></script>

  <footer class="bd-footer">
  </footer>
  </body>
</html>
# ispf3ecom

**English**  

Store CRUD Project for Programming 3 taught by Professor Christian Cerquand from Instituto Superior Fermosa.  
2021  

#Programs and technologies used:  
-PHP 8.0.7  
-Apache 2.4.48 Win64 OpenSSL 1.1.1k  
-phpMyAdmin 5.1.1  
-FileZilla FTP Server 0.9.41  
as part of XAMPP Version 8.0.7  
-MySQL 8.0.24  
-Microsoft Visual Studio Code  
-git version 2.32.0.windows.1
-CodeIgniter 3.1.11  
-AdminLTE 3.0.5  


├───application
│   ├───cache
│   ├───config
│   ├───controllers
│   │   ├───clientes
│   │   ├───log
│   │   ├───productos
│   │   ├───sysadmin
│   │   ├───usuarios
│   │   └───ventas
│   ├───core
│   ├───helpers
│   ├───hooks
│   ├───language
│   │   ├───english
│   │   └───spanish
│   ├───libraries
│   ├───logs
│   ├───models
│   ├───third_party
│   └───views
│       ├───admin
│       │   ├───clientes
│       │   ├───permisos
│       │   ├───productos
│       │   ├───usuarios
│       │   └───ventas
│       ├───errors
│       │   ├───cli
│       │   └───html
│       ├───layouts
│       ├───login
│       ├───products
│       └───register
├───assets
│   └───template
│       ├───bootstrap
│       │   ├───css
│       │   ├───fonts
│       │   └───js
│       ├───datatables.net
│       │   └───js
│       ├───datatables.net-bs
│       │   ├───css
│       │   └───js
│       ├───dist
│       │   ├───css
│       │   │   ├───alt
│       │   │   └───skins
│       │   ├───img
│       │   │   └───credit
│       │   └───js
│       │       └───pages
│       ├───fastclick
│       │   └───lib
│       ├───font-awesome
│       │   ├───css
│       │   ├───fonts
│       │   ├───less
│       │   └───scss
│       ├───jquery
│       └───jquery-slimscroll
│           └───examples
│               └───libs
│                   └───prettify
├───build
│   ├───config
│   ├───js
│   ├───npm
│   └───scss
│       ├───mixins
│       ├───pages
│       ├───parts
│       └───plugins
├───dist
│   ├───css
│   │   └───alt
│   ├───img
│   │   └───credit
│   └───js
│       └───pages
├───docs
│   ├───assets
│   │   ├───css
│   │   │   └───alt
│   │   ├───img
│   │   ├───js
│   │   │   └───pages
│   │   └───plugins
│   │       ├───bootstrap
│   │       │   └───js
│   │       ├───fontawesome-free
│   │       │   ├───css
│   │       │   └───webfonts
│   │       ├───jquery
│   │       ├───overlayScrollbars
│   │       │   ├───css
│   │       │   └───js
│   │       └───popper
│   │           ├───esm
│   │           └───umd
│   ├───components
│   ├───javascript
│   ├───_includes
│   └───_layouts
├───pages
│   ├───charts
│   ├───examples
│   ├───forms
│   ├───layout
│   ├───mailbox
│   ├───search
│   ├───tables
│   └───UI
├───plugins
│   ├───bootstrap
│   │   └───js
│   ├───bootstrap-colorpicker
│   │   ├───css
│   │   └───js
│   ├───bootstrap-slider
│   │   └───css
│   ├───bootstrap-switch
│   │   ├───css
│   │   │   ├───bootstrap2
│   │   │   └───bootstrap3
│   │   └───js
│   ├───bootstrap4-duallistbox
│   ├───bs-custom-file-input
│   ├───bs-stepper
│   │   ├───css
│   │   └───js
│   ├───chart.js
│   ├───codemirror
│   │   ├───addon
│   │   │   ├───comment
│   │   │   ├───dialog
│   │   │   ├───display
│   │   │   ├───edit
│   │   │   ├───fold
│   │   │   ├───hint
│   │   │   ├───lint
│   │   │   ├───merge
│   │   │   ├───mode
│   │   │   ├───runmode
│   │   │   ├───scroll
│   │   │   ├───search
│   │   │   ├───selection
│   │   │   ├───tern
│   │   │   └───wrap
│   │   ├───keymap
│   │   ├───mode
│   │   │   ├───apl
│   │   │   ├───asciiarmor
│   │   │   ├───asn.1
│   │   │   ├───asterisk
│   │   │   ├───brainfuck
│   │   │   ├───clike
│   │   │   ├───clojure
│   │   │   ├───cmake
│   │   │   ├───cobol
│   │   │   ├───coffeescript
│   │   │   ├───commonlisp
│   │   │   ├───crystal
│   │   │   ├───css
│   │   │   ├───cypher
│   │   │   ├───d
│   │   │   ├───dart
│   │   │   ├───diff
│   │   │   ├───django
│   │   │   ├───dockerfile
│   │   │   ├───dtd
│   │   │   ├───dylan
│   │   │   ├───ebnf
│   │   │   ├───ecl
│   │   │   ├───eiffel
│   │   │   ├───elm
│   │   │   ├───erlang
│   │   │   ├───factor
│   │   │   ├───fcl
│   │   │   ├───forth
│   │   │   ├───fortran
│   │   │   ├───gas
│   │   │   ├───gfm
│   │   │   ├───gherkin
│   │   │   ├───go
│   │   │   ├───groovy
│   │   │   ├───haml
│   │   │   ├───handlebars
│   │   │   ├───haskell
│   │   │   ├───haskell-literate
│   │   │   ├───haxe
│   │   │   ├───htmlembedded
│   │   │   ├───htmlmixed
│   │   │   ├───http
│   │   │   ├───idl
│   │   │   ├───javascript
│   │   │   ├───jinja2
│   │   │   ├───jsx
│   │   │   ├───julia
│   │   │   ├───livescript
│   │   │   ├───lua
│   │   │   ├───markdown
│   │   │   ├───mathematica
│   │   │   ├───mbox
│   │   │   ├───mirc
│   │   │   ├───mllike
│   │   │   ├───modelica
│   │   │   ├───mscgen
│   │   │   ├───mumps
│   │   │   ├───nginx
│   │   │   ├───nsis
│   │   │   ├───ntriples
│   │   │   ├───octave
│   │   │   ├───oz
│   │   │   ├───pascal
│   │   │   ├───pegjs
│   │   │   ├───perl
│   │   │   ├───php
│   │   │   ├───pig
│   │   │   ├───powershell
│   │   │   ├───properties
│   │   │   ├───protobuf
│   │   │   ├───pug
│   │   │   ├───puppet
│   │   │   ├───python
│   │   │   ├───q
│   │   │   ├───r
│   │   │   ├───rpm
│   │   │   ├───rst
│   │   │   ├───ruby
│   │   │   ├───rust
│   │   │   ├───sas
│   │   │   ├───sass
│   │   │   ├───scheme
│   │   │   ├───shell
│   │   │   ├───sieve
│   │   │   ├───slim
│   │   │   ├───smalltalk
│   │   │   ├───smarty
│   │   │   ├───solr
│   │   │   ├───soy
│   │   │   ├───sparql
│   │   │   ├───spreadsheet
│   │   │   ├───sql
│   │   │   ├───stex
│   │   │   ├───stylus
│   │   │   ├───swift
│   │   │   ├───tcl
│   │   │   ├───textile
│   │   │   ├───tiddlywiki
│   │   │   ├───tiki
│   │   │   ├───toml
│   │   │   ├───tornado
│   │   │   ├───troff
│   │   │   ├───ttcn
│   │   │   ├───ttcn-cfg
│   │   │   ├───turtle
│   │   │   ├───twig
│   │   │   ├───vb
│   │   │   ├───vbscript
│   │   │   ├───velocity
│   │   │   ├───verilog
│   │   │   ├───vhdl
│   │   │   ├───vue
│   │   │   ├───wast
│   │   │   ├───webidl
│   │   │   ├───xml
│   │   │   ├───xquery
│   │   │   ├───yacas
│   │   │   ├───yaml
│   │   │   ├───yaml-frontmatter
│   │   │   └───z80
│   │   └───theme
│   ├───datatables
│   ├───datatables-autofill
│   │   ├───css
│   │   └───js
│   ├───datatables-bs4
│   │   ├───css
│   │   └───js
│   ├───datatables-buttons
│   │   ├───css
│   │   └───js
│   ├───datatables-colreorder
│   │   ├───css
│   │   └───js
│   ├───datatables-fixedcolumns
│   │   ├───css
│   │   └───js
│   ├───datatables-fixedheader
│   │   ├───css
│   │   └───js
│   ├───datatables-keytable
│   │   ├───css
│   │   └───js
│   ├───datatables-responsive
│   │   ├───css
│   │   └───js
│   ├───datatables-rowgroup
│   │   ├───css
│   │   └───js
│   ├───datatables-rowreorder
│   │   ├───css
│   │   └───js
│   ├───datatables-scroller
│   │   ├───css
│   │   └───js
│   ├───datatables-searchbuilder
│   │   ├───css
│   │   └───js
│   ├───datatables-searchpanes
│   │   ├───css
│   │   └───js
│   ├───datatables-select
│   │   ├───css
│   │   └───js
│   ├───daterangepicker
│   ├───dropzone
│   │   └───min
│   ├───ekko-lightbox
│   ├───fastclick
│   ├───filterizr
│   ├───flag-icon-css
│   │   ├───css
│   │   └───flags
│   │       ├───1x1
│   │       └───4x3
│   ├───flot
│   │   └───plugins
│   ├───fontawesome-free
│   │   ├───css
│   │   └───webfonts
│   ├───fullcalendar
│   │   └───locales
│   ├───highcharts
│   ├───icheck-bootstrap
│   ├───inputmask
│   ├───ion-rangeslider
│   │   ├───css
│   │   └───js
│   ├───jquery
│   ├───jquery-knob
│   ├───jquery-mapael
│   │   └───maps
│   ├───jquery-mousewheel
│   ├───jquery-print
│   ├───jquery-ui
│   │   └───images
│   ├───jquery-validation
│   │   └───localization
│   ├───jqueryui
│   │   ├───external
│   │   │   └───jquery
│   │   └───images
│   ├───jqvmap
│   │   └───maps
│   │       └───continents
│   ├───jsgrid
│   │   ├───demos
│   │   └───i18n
│   ├───jszip
│   ├───moment
│   │   └───locale
│   ├───overlayScrollbars
│   │   ├───css
│   │   └───js
│   ├───pace-progress
│   │   └───themes
│   │       ├───black
│   │       ├───blue
│   │       ├───green
│   │       ├───orange
│   │       ├───pink
│   │       ├───purple
│   │       ├───red
│   │       ├───silver
│   │       ├───white
│   │       └───yellow
│   ├───pdfmake
│   ├───popper
│   │   ├───esm
│   │   └───umd
│   ├───raphael
│   ├───select2
│   │   ├───css
│   │   └───js
│   │       └───i18n
│   ├───select2-bootstrap4-theme
│   ├───sparklines
│   ├───summernote
│   │   ├───font
│   │   ├───lang
│   │   └───plugin
│   │       ├───databasic
│   │       ├───hello
│   │       └───specialchars
│   ├───sweetalert2
│   ├───sweetalert2-theme-bootstrap-4
│   ├───tempusdominus-bootstrap-4
│   │   ├───css
│   │   └───js
│   ├───toastr
│   └───uplot
├───system
│   ├───core
│   │   └───compat
│   ├───database
│   │   └───drivers
│   │       ├───cubrid
│   │       ├───ibase
│   │       ├───mssql
│   │       ├───mysql
│   │       ├───mysqli
│   │       ├───oci8
│   │       ├───odbc
│   │       ├───pdo
│   │       │   └───subdrivers
│   │       ├───postgre
│   │       ├───sqlite
│   │       ├───sqlite3
│   │       └───sqlsrv
│   ├───fonts
│   ├───helpers
│   ├───language
│   │   └───english
│   └───libraries
│       ├───Cache
│       │   └───drivers
│       ├───Javascript
│       └───Session
│           └───drivers
└───vendor
    ├───bin
    └───composer

**Español**  

Proyecto ABM/CRUD Tienda para Programación 3 dictado por el Profesor Cristian Cerquand del Instituto Superior Fermosa.  
2021  

Programas y tecnologías usadas:  
-PHP 8.0.7  
-Apache 2.4.48 Win64 OpenSSL 1.1.1k  
-phpMyAdmin 5.1.1  
-FileZilla FTP Server 0.9.41  
como parte de XAMPP Version 8.0.7  
-MySQL 8.0.24  
-Microsoft Visual Studio Code  
-git version 2.32.0.windows.1  
-CodeIgniter 3.1.11  
-AdminLTE 3.0.5  

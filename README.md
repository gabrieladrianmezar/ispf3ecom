# ispf3ecom

Alojado en: http://gamezar.xyz/
Live Site at: http://gamezar.xyz/

**English**  

-Ecommerce + CRUD Project.  
-Guests can sign up then sign in as customers and add products from the catalogue to a cart with which they can make purchases. 
-System users can sign in into the "admin panel" and create, delete or edit user, sale, customer, product and permission data acorrding to their role.  
The system is in Spanish.

**#Programs and technologies used:**  
-PHP 8.0.7  
-HTML5  
-CSS3  
-JavaScript  
-Apache 2.4.48 Win64 OpenSSL 1.1.1k    
-FileZilla FTP Server 0.9.41  
-MySQL 8.0.24  

**#Libraries used (not including libraries included by libraries):**  
-Bootstrap 4  
-Highcharts JS 9.3.1  
-jQuery 3.6.0  

**#Framework used:**    
-CodeIgniter 3.1.11  
#Template used:  
-AdminLTE 3.0.5  

**#Supporting technologies used:**   

-git version 2.32.0.windows.1  
-phpMyAdmin 5.1.1  

**#Text Editor used:**      
-Microsoft Visual Studio Code (1.57.1)  

**File Structure**
```
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
└───system
    ├───core
    │   └───compat
    ├───database
    │   └───drivers
    │       ├───cubrid
    │       ├───ibase
    │       ├───mssql
    │       ├───mysql
    │       ├───mysqli
    │       ├───oci8
    │       ├───odbc
    │       ├───pdo
    │       │   └───subdrivers
    │       ├───postgre
    │       ├───sqlite
    │       ├───sqlite3
    │       └───sqlsrv
    ├───fonts
    ├───helpers
    ├───language
    │   └───english
    └───libraries
        ├───Cache
        │   └───drivers
        ├───Javascript
        └───Session
            └───drivers
```

**#Relational model:**  

![mydb](https://user-images.githubusercontent.com/85672399/143794973-e6356354-9ef0-49e3-afad-ded3f5b92ce0.PNG)

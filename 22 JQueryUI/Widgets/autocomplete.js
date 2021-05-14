
// $('document').ready(function() { 
$( function() {

        var vec_leng=["ActionScript","AppleScript","Algol","Asp",
                  "Basic",
                  "C","C++","C#","Clojure","COBOL","ColdFusion",
                  "Erlang",
                  "Fortran","Fox",
                  "Groovy",
                  "Haskell",
                  "Java","JavaScript",
                  "Lisp","Lua",
                  "Perl","PHP","Python",
                  "R","Ruby","RubyOnRails",
                  "Scala","Scheme"];

    $('#lenguajes').autocomplete({source:vec_leng});

});

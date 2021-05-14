 var vGlobal = 'glo';                       // Variable en el ámbito global

 (function funcionExterna (pFuncExt) {      // Función Externa (Auto-ejecutable)
     var vFuncExt = 'ext';                  // Variable en el ámbito de la funcionExterna

     (function funcionInterna (pFuncInt) {  // Función Interna (Auto-ejecutable) (CLOSURE)
         var vFuncInt = 'int';              // Variable en el ámbito de la funcionInterna

         console.log(`pFuncInt = ${pFuncInt}`);
         console.log(`vFuncInt = ${vFuncInt}`);
         console.log("\n");
         console.log(`pFuncExt = ${pFuncExt}`);
         console.log(`vFuncExt = ${vFuncExt}`);
         console.log("\n");
         console.log(`vGlobal  = ${vGlobal}`);
     })(100);                                // Fin de alcance de funcionInterna
 })(200);                                    // Fin de alcance de funcionExterna




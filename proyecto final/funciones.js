function ver(){
    let contraseña;

    contraseña= document.getElementById("contraseña");

    if (contraseña.type =="text") {
        contraseña.type ="password";
    } else {
        contraseña.type ="text";
    }
 }
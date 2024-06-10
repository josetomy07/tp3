

function regForm() {
    var getSelectValue = document.getElementById('roles').value;

    switch (getSelectValue) {

        case "3":

            document.getElementById('formulario').style.display="block";
            document.getElementById('Docente').style.display="block";
            document.getElementById('formulario').setAttribute("required", "required");
            document.getElementById('Estudiante').style.display="none";
            document.getElementById('No-Docente').style.display="none";

            break;
        case "2":

            document.getElementById('formulario').style.display="block";
            document.getElementById('Estudiante').style.display="block";
            document.getElementById('formulario').setAttribute("required", "required");
            document.getElementById('Docente').style.display="none";
            document.getElementById('No-Docente').style.display="none";
        
            break;
        case "1":

            document.getElementById('formulario').style.display="block";
            document.getElementById('No-Docente').style.display="block";
            document.getElementById('formulario').setAttribute("required", "required");
            document.getElementById('Docente').style.display="none";
            document.getElementById('Estudiante').style.display="none";
            
            break;
    
        default:
            document.getElementById('formulario').style.display="none";
            document.getElementById('Docente').style.display="none";
            document.getElementById('Estudiante').style.display="none";
            document.getElementById('No-Docente').style.display="none";
            break;
    }
}

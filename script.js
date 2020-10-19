function validarForm(){
    var disciplina = document.forms["disciplinas"] ["txtDisciplina"].value;
    if(disciplina == "") {
        alert("O campo disciplina deve ser preenchido!");
        return false;
    }
}

function lerDinamico(){

    var http = new XMLHttpRequest();
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var dadosXML = this.responseXML;

            var materias = dadosXML.getElementsByTagName("materia");
    
            var texto = '<table border="1" >';
                    texto += '<tr> ';
                    texto += '   <th>Disciplina:</th> ';
                    texto += '   <th>Professor:</th>';
                    texto += '   <th>Semestre:</th>';
                    texto += '</tr>';
            
            for(i = 0 ; i < materias.length; i++){

                disciplina = materias[i].getElementsByTagName("disciplina");
                professor = materias[i].getElementsByTagName("professor");
                semestre = materias[i].getElementsByTagName("semestre");

                texto += '<tr>';
                texto += '      <td>' + disciplina[0].childNodes[0].nodeValue + '</td>';
                texto += '      <td>' + professor[0].childNodes[0].nodeValue + '</td>';
                texto += '      <td>' + semestre[0].childNodes[0].nodeValue + '</td>';
                texto += '</tr>';
            }
            texto += '</table>'

            document.getElementById("dinamico").innerHTML = texto;
        }
    };
    http.open("GET", "servidor.php", true);
    http.send();
}
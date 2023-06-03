function submitForm(event) {
    event.preventDefault();
  
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
  
    var formData = {
      name: name,
      email: email
    };
  
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "salvar_log.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Dados enviados com sucesso para o servidor.");
      }
    };
    xhr.send(JSON.stringify(formData));
  }
  
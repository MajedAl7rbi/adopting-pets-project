send = () => {
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function () {
    Swal.fire("Good job!", "You added new pet!", "success");
  };
  xmlhttp.add;
  var formData = new FormData($("#myForm")[0]);
  xmlhttp.open("POST", "./api/addpet.php");
  xmlhttp.send(formData);
};

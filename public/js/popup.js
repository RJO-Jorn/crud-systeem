

function openCreateOverlay() {
  document.getElementById("create-overlay").style.display = "flex";
}

function closeCreateOverlay() {
  document.getElementById("create-overlay").style.display = "none";
}

function openEditOverlay() {
  document.getElementById("edit-overlay").style.display = "flex";
}

function closeEditOverlay() {
  document.getElementById("edit-overlay").style.display = "none";
}

function fetchEditData(klantId) {
  var csrfToken = $('meta[name="csrf-token"]').attr('content');

  $.ajax({
    url: "/fetch-data/" + klantId,
    type: "POST",
    data: {
      id: klantId,
      _token: csrfToken
    },
    success: function(response) {
      $('#E-id').val(response.id);
      $('#E-firstName').val(response.firstname);
      $('#E-lastName').val(response.lastname);
      $('#E-birthDate').val(response.birthDate);
      $('#E-emailAddress').val(response.emailAdress);
      $('#E-phoneNumber').val(response.phoneNumber);
      $('#E-houseNumber').val(response.houseNumber);
      $('#E-streetAddress').val(response.streetAddress);
      $('#E-City').val(response.city);
      $('#E-Country').val(response.country);
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
  openEditOverlay();
}
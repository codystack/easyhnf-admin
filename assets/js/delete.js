//Meal Delete Trigger
function confirmMealDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-meal").id.value = id;
    $("#mealDeleteModal").modal("show");
}
//Meal Delete Trigger
function confirmMealDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-meal").id.value = id;
    $("#mealDeleteModal").modal("show");
}


//User Delete Trigger
function confirmUserDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}


//Subscription Delete Trigger
function confirmSubscriptionDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-subscription").id.value = id;
    $("#subscriptionDeleteModal").modal("show");
}
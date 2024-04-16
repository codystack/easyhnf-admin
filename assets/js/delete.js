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



//Custom Plan Delete Trigger
function confirmCustomPlanDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-custom-plan").id.value = id;
    $("#customPlanDeleteModal").modal("show");
}


//Basic Diet Delete Trigger
function confirmBasicDietDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-basic-diet").id.value = id;
    $("#basicDietDeleteModal").modal("show");
}


//Basic Plan Delete Trigger
function confirmBasicPlanDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-basic-plan").id.value = id;
    $("#basicPlanDeleteModal").modal("show");
}

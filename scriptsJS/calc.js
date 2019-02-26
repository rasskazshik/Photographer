$(".masterCostCalculated, .studiaCostCalculated, .outdoorCostCalculated").on("change",function(){
    var masterCostCalculated = $(".masterCostCalculated").val();
    var studiaCostCalculated = $(".studiaCostCalculated").val();
    var outdoorCostCalculated = $(".outdoorCostCalculated").val();
    var total = Number(masterCostCalculated) + Number(studiaCostCalculated) + Number(outdoorCostCalculated);
    $(".totalCost").html(total);
});

$(".masterInput").on("change",function(){
    var houres = $(this).val();
    var cost = $(".masterCostPerH").val();
    var total = houres*cost;
    $(".masterCostCalculated").val(total);
    $(".masterCostCalculated").trigger("change");
});

$(".studiaInput").on("change",function(){
    var houres = $(this).val();
    var cost = $(".studiaCostPerH").val();
    var total = houres*cost;
    $(".studiaCostCalculated").val(total);
    $(".studiaCostCalculated").trigger("change");
});

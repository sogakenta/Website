let symbol = 20;
$('#ServiceSelect').change(function() {
  var Svalue = Number($('#ServiceSelect').val());
  AllCheckOff(1,1);
  switch (Svalue) {
    case 1:
    WordAndGenerat(16,20);
    var CheckNo = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
    CheckNo.forEach(function(value) {SelectCheckOn(value)});
    var MoziNo = [0,1];
    MoziNo.forEach(function(value) {MozikataCheckOn(value)});
    break;

    case 2:
    WordAndGenerat(16,20);
    var CheckNo = [19];
    CheckNo.forEach(function(value) {SelectCheckOn(value)});
    var MoziNo = [0,1];
    MoziNo.forEach(function(value) {MozikataCheckOn(value)});
    break;

    case 3:
    WordAndGenerat(30,20);
    AllCheckOn(1,1);
    break;
    default:
    break;
  }
});

$('#all0').change(function(){
  if ($("#all0").prop("checked")){
    $('#all1').attr('checked', true);
    $('#all2').attr('checked', true);
    AllCheckOn(1,1);
  }else{
    $('#all1').attr('checked', false);
    $('#all2').attr('checked', false);
    AllCheckOff(1,1);
  }
});

$('#all1').change(function(){
  if ($("#all1").prop("checked")) AllCheckOn(1,0);
  else AllCheckOff(1,0);
});

$('#all2').change(function(){
  if ($("#all2").prop("checked")) AllCheckOn(0,1);
  else AllCheckOff(0,1);
});

function WordAndGenerat(word,gen) {
  $('#Mozisuu').val(word);
  $('#Seisei').val(gen);
}

function SelectCheckOn(no) {
  var data = "#inlineCheckbox" + no;
  $(data).prop("checked", true);
}

function MozikataCheckOn(no) {
  var data = "#mozi" + no;
  $(data).prop("checked", true);
}

function AllCheckOff($mozi,$kigou) {
  if($mozi==1){
    for (var i = 0; i < 3; i++) {
      var data = "#mozi" + i;
      $(data).prop("checked", false);
    }
  }
  if ($kigou==1) {
    for (var i = 0; i < symbol; i++) {
      var data = "#inlineCheckbox" + i;
      $(data).prop("checked", false);
    }
  }
}

function AllCheckOn($mozi,$kigou) {
  if($mozi==1){
    for (var i = 0; i < 3; i++) {
      var data = "#mozi" + i;
      $(data).prop("checked", true);
    }
  }
  if ($kigou==1) {
    for (var i = 0; i < symbol; i++) {
      var data = "#inlineCheckbox" + i;
      $(data).prop("checked", true);
    }
  }
}

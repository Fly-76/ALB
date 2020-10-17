// TO DO
//  -> time out on No Activity, click, keypress, etc

function disconnect(){
    window.location="disconnect.php";
}
let logoffTime = setTimeout("disconnect()", 3 * 60000);

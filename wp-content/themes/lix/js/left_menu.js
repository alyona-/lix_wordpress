/**
 * Created by Алёна on 16.08.2016.
 */
alert('work');


document.querySelector('body').addEventListener('click', function(event) {
    var target = event.target;
    do {
        var i=false;
        var classList = target.classList.toString();
        classList=classList.split(' ');
        for(var i in classList){
            if(classList[i] == 'left_menu') {i=true;break;}
        }
        if(i==true) break;
        target=target.parentNode;
    }while(target.tagName == 'BODY');
    event.returnValue = false;
    alert(target);
   // openPopupFromLink(target);
});
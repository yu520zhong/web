
/*数字动态变化*/

function countUpTo(count,selector,max)
    {
      console.log("count--> "+count);
        var div_by = count,
            speed = Math.round(count / div_by),
            $display = selector,
            run_count = 1,
            int_speed = 24;

        var int = setInterval(function() {
            if(run_count < div_by){
                $display.text(speed * run_count);
                run_count++;
            } else if(parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                var text = "";
                if(max>99){
                     if(curr_count<10){
                        text = text+"00"+curr_count;
                    }
                    /*else if(curr_count < 100 && curr_count >9){
                        text = text+"0"+curr_count;
                    }*/
                    else{
                      text = curr_count;
                    }
                }else if(max<100 && max>9){
                     if(curr_count<10){
                        text = text+"00"+curr_count;
                    }
                   /*else if(curr_count < 100 && curr_count >9){
                        text = text+"0"+curr_count;
                    }*/
                    else{
                      text = curr_count;
                    }
                }else{
                      if(curr_count<10){
                        text = text+"00"+curr_count;
                    }
                   /*else if(curr_count < 100 && curr_count >9){
                        text = text+"0"+curr_count;
                    }*/
                    else{
                      text = curr_count;
                    }
                }
               
                $display.text(text);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }


var firstTime = true;
$(document).scroll(function(event) {



  var result = $('.count-timer').isOnScreen();

  if(result == true) {
      console.log("on screen");

      if(firstTime){
        firstTime = false;
            
          var count1 = $('.count1'),
            count2 = $('.count2'),
            count3 = $('.count3'),
            count4 = $('.count4'),
            count5 = $('.count5'),
            count6 = $('.count6')
            count1Num = count1.text(),
            count2Num = count2.text(),
            count3Num = count3.text(),
            count4Num = count4.text(),
            count5Num = count5.text(),
            count6Num = count6.text();

            var max = Math.max(parseInt(count1Num),parseInt(count2Num));
            max = Math.max(max,parseInt(count6Num));
            console.log(max);

            countUpTo(count1Num,count1,max);
            countUpTo(count2Num,count2,max);
            countUpTo(count3Num,count3,max);
            countUpTo(count4Num,count4,max);
            countUpTo(count5Num,count5,max);
            countUpTo(count6Num,count6,max);
      }

    }
});
 $(function() {

   // *******フェードイン・フェードアウト***********
     setTimeout(function(){
       // 0.5（500）秒後に1（1000）秒かけてフェードイン
       $('.visual-pc').fadeIn(3000);
    },1000);
    
      // 2.5（2500）秒後に1（1000）秒かけてフェードアウト
     setTimeout(function(){
       $('.visual-pc').fadeOut(5000);
   },3000);
    

});
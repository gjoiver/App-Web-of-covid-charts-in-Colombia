$.ajax({
    url:'php/listSexo.php',
    type:'GET',
    dataType:'json',
    success:function(json){
      let datos=[];
      let sexo=[]; 
      
      for(var i=0;i<json.length;i++){
             datos.push(json[i]["COUNT(*)"]);
             sexo.push(json[i].sexo);
          
      }   
     console.log(json); 
     var ctx = document.getElementById('myChart');
     var myChart = new Chart(ctx, {
         type: 'horizontalBar',
         data: {
             labels: sexo,
             datasets: [{
                 label: '#casos',
                 data: datos,
                 backgroundColor: [
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(54, 162, 235, 0.2)'
                     
                 ],
                 borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)'
                     
                 ],
                 borderWidth: 1
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                    barPercentage: 0.2,
                     ticks: {
                         beginAtZero: true
                     }
                 }]
             }
         }
     });
             
    },
    error : function(xhr, status) {
     alert('ha ocurrido un error');
 }
 
 })
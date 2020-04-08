function graphe(el){
	anychart.onDocumentReady(function() {
        var data = console.log(el)
        //Création du graphique
        var chart = anychart.pie(); 
        //Son titre
        chart.title("Représentation");
        //Ses données
        chart.data(data);
        chart.container('graphe');
        chart.draw();
        }) 
}
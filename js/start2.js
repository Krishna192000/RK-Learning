<script>
var vid = document.getElementById("myVideo"); 

function playVid() { 
    vid.play(); 
} 
document.getElementById("button1").addEventListener("click", function() {
    document.querySelector(".bg-modal").style.display = "flex";
    document.getElementById("s_or_t").value = "s";
});
document.getElementById("button2").addEventListener("click", function() {
    document.querySelector(".bg-modal").style.display = "flex";
    document.getElementById("s_or_t").value = "t";
});
document.querySelector(".close").addEventListener("click", function() {
    document.querySelector(".bg-modal").style.display = "none";
});
</script>
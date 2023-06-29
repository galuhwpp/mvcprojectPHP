<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/fddbd59331.js" crossorigin="anonymous"></script>
<script>$(document).ready(function() {
      $('#showFormBtn').click(function() {
        $('#hiddenForm').toggle();
        $('.hidden-card .card').toggleClass('border');
      });
    });</script>


<script>
    function showLoginAlert() {
        alert('Anda harus login terlebih dahulu.');
    }
</script>


</body>

</html>
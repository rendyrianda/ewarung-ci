<footer class="nava bg-tribute">
    <div class="social">
        <ul class="nav">
            <li><a href="#" class="nav-link text-light">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a></li>
            <li><a href="#" class="nav-link text-light">
                    <i class="fab fa-twitter fa-2x"></i>
                </a></li>
            <li><a href="#" class="nav-link text-light">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a></li>
            <li><a href="#" class="nav-link text-light">
                    <i class="fab fa-pinterest-p fa-2x"></i>
                </a></li>
            <li><a href="#" class="nav-link text-light">
                    <i class="fab fa-instagram fa-2x"></i>
                </a></li>
        </ul>
    </div>
    <div class="text-white tribute">
        <span>
            Project BPF</span>
        <span>Made with <b class="text-danger">♥</b></span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
    $(document).ready(function() {
        $("#jumlah").on('keydown keyup change blur', function() {
            var harga = $("#harga_product").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
            if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
                reset()
            }
        });

        function reset() {
            $('input[name="jumlah"]').val('')
            $('input[name="total"]').val('')
        }
    });
</script>
</body>

</html>
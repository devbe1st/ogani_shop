<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
@if (Session::has('success'))
    <input type="hidden" name="message" id="message" value="{{ Session::get('success') }}">
    <script>
        Swal.fire({
            title: 'Ogani',
            text: document.getElementById('message').value,
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif
@if (Session::has('error'))
    <input type="hidden" name="message" id="message" value="{{ Session::get('error') }}">
    <script>
        Swal.fire({
            title: 'Ogani',
            text: document.getElementById('message').value,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
@endif
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Ready to Leave?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn mb-2 btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

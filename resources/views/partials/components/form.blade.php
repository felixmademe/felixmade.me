<div id="alert" class="py-2">
    <p></p>
</div>
<form>
    @csrf
    <input type="hidden" id="recaptcha" name="recaptcha" value="">
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="name..." required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="email..." required>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="5" name="text" placeholder="message..." required></textarea>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="policy" required class="form-check-input">
        <label class="form-check-label white">i have read and accept the
            <a class="darkgrey" href="{{ route( 'policy' ) }}" target="_blank">
                privacy policy
            </a>
        </label>
    </div>
    <button type="submit" class="btn btn-red" id="submit">submit</button>
</form>
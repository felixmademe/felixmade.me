<div id="alert">
    <p></p>
</div>
<form>
    @csrf
    <input type="hidden" id="recaptcha" name="recaptcha" value="">
    <div class="">
        <input type="text" class="" name="name" placeholder="name..." required>
    </div>
    <div class="">
        <input type="email" class="" name="email" placeholder="email..." required>
    </div>
    <div class="">
        <textarea class="" rows="5" name="text" placeholder="message..." required></textarea>
    </div>
    <div class="">
        <input type="checkbox" name="policy" required class="">
        <label class="">i have read and accept the
            <a class="" href="{{ route( 'policy' ) }}" target="_blank">
                privacy policy
            </a>
        </label>
    </div>
    <button type="submit" class="" id="submit">submit</button>
</form>

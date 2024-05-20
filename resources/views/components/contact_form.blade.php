<div class="contact container">
    <form action="{{ route("contact.sendEmail") }}" method="POST">
        @csrf
        <h1>Contact</h1>
        <div>
            <label>
                <input name="email" placeholder="Email" value="{{ old('email') }}" >
            </label>

            <label>
                <input name="name" placeholder="Name (Optional)" value="{{ old('name') }}" >
            </label>
        </div>

        <label>
            <input name="email_subject" placeholder="Subject" value="{{ old('email_subject') }}" >
        </label>

        <textarea name="email_body" placeholder="Body" rows="7">{{ old('email_body') }}</textarea>

        <div class="submit container">
            <button>Submit</button>
            <span>OR</span>
            <a href="mailto:contact@dhir0hit.com">contact@dhir0hit.com</a>
        </div>
    </form>
</div>

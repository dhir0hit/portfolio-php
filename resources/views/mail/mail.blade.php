<html
    style="
        margin: 0;
        padding: 0;

        background-color: #191716;
        display: flex;
        flex-direction: row;
        justify-content: center;
        "
>
    <div
        style="
            margin: 0;

            max-width: 600px;
            min-width: 400px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            background-color: #BEB7A419;
            padding: 1.5rem 1rem;
            height: 100%;
            "
    >
        <div
            style="
                margin: 0;
                padding: 0;

                display: flex;
                flex-direction: column;
                height: 100%;
                "
        >
            <div
                style="
                    margin: 0;
                    padding: 0;

                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    "
            >
                <img src="{{ asset('signature.png') }}" alt="dhir0hit" width="400px" />
            </div>

            <div class="body">
                <h1 style="
                margin: 0;
                padding: 0;

                font-family: sans-serif;
                color: #BEB7A4;
                margin-block: 10px;

                font-weight: 400;
                font-size: 2rem;
                margin-bottom: 1rem;"
                >
                    Hello <span style="color: #C27424; margin: 0; padding: 0;">{{ $name }}</span>,
                </h1>

                <h4
                    style="
                        margin: 0;
                        padding: 0;

                        font-weight: 400;
                        font-family: sans-serif;
                        color: #BEB7A4;
                        margin-block: 10px;
                    "
                >
                    Thanks for reaching out about:
                </h4>

                <p
                    class="mail_body"
                    style="
                        margin: 0;
                        border: 2px #BEB7A4 solid;
                        padding: 1rem 1.5rem;
                        background-color: #191716;

                        font-family: sans-serif;
                        color: #BEB7A4;
                        margin-block: 10px;
                    "
                >{{ $emailBody }}</p>
            </div>
        </div>

        <div
            style="
                margin: 0;
                padding: 0;

                display: flex;
                flex-direction: column;
                align-items: center;
                "
        >
            <p
                style="
                    margin: 0;
                    padding: 0;

                    font-family: sans-serif;
                    color: #BEB7A4;
                    margin-block: 10px;
                    "
            >
                This is an automatically generated email.
            </p>
            <p
                style="
                    margin: 0;
                    padding: 0;

                    font-family: sans-serif;
                    color: #BEB7A4;
                    margin-block: 10px;
                    "
            >
                for: <span style="color: #C27424; margin: 0; padding: 0;">{{ $email }}</span>
            </p>
        </div>
    </div>
</html>

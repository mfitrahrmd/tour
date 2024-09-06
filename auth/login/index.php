<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="mx-auto flex max-w-7xl items-center p-6 lg:px-8" aria-label="Global">
            <div class="flex">
                <a href="#" class="p-1.5">
                    <span class="sr-only">Your Company</span>
                    <svg class="h-8 w-fit" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" style="overflow: visible;">
                        <g id="_18ZIHszQpP9saEnfzVKD2" transform="matrix(2.936794295005337, 0, 0, 2.936794295005337, -499.95161681594993, -323.31145238989086)" data-uid="o-5efaf2f44c0e4df2987df8b1e4dc1cec">
                            <path id="_kYXqDcnwfY8DJYFiTRdg-" fill="#04bfab" d="M74.99 61.26c-2.344 0-3.434-0.979-5.292-2.83c-1.97-1.976-4.667-4.681-9.716-4.681   c-5.043 0-7.74 2.705-9.717 4.681c-1.851 1.853-2.935 2.83-5.278 2.83c-2.344 0-3.427-0.979-5.292-2.83   c-1.963-1.976-4.661-4.681-9.709-4.681c-5.042 0-7.74 2.705-9.709 4.681c-1.858 1.853-2.941 2.83-5.285 2.83   c-2.337 0-3.42-0.972-5.285-2.83C7.74 56.454 5.048 53.749 0 53.749v6.257c2.344 0 3.42 0.979 5.285 2.842   c1.97 1.963 4.661 4.668 9.709 4.668c5.042 0 7.74-2.705 9.709-4.668c1.864-1.863 2.941-2.842 5.285-2.842   c2.343 0 3.427 0.979 5.285 2.842c1.969 1.978 4.667 4.668 9.716 4.668c5.049 0 7.74-2.69 9.709-4.668   c1.864-1.863 2.94-2.842 5.284-2.842c2.351 0 3.427 0.979 5.291 2.842c1.97 1.978 4.668 4.668 9.717 4.668   c5.05 0 7.748-2.69 9.717-4.668c1.863-1.863 2.947-2.842 5.292-2.842v-6.257c-5.049 0-7.754 2.705-9.717 4.681   C78.418 60.281 77.335 61.26 74.99 61.26" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 114.62395477294922)" stroke-width="1" data-uid="o-1f5de7ca2b64454caee5f50de1b10789"></path>
                            <path id="_PCL-olsev6tZtyZjtKB5G" fill="#ef8b52" d="M80.282 44.709c-1.864 1.865-2.947 2.835-5.292 2.835c-2.344 0-3.428-0.971-5.292-2.835   c-1.392-1.392-3.15-3.118-5.822-4.031c-1.09-9.453-9.132-16.832-18.881-16.832c-9.742 0-17.784 7.372-18.874 16.826   c-2.679 0.906-4.458 2.646-5.849 4.037c-1.852 1.865-2.941 2.835-5.278 2.835s-3.42-0.971-5.285-2.835   C7.74 42.733 5.048 40.042 0 40.042v6.257c2.344 0 3.42 0.971 5.285 2.828c1.963 1.977 4.661 4.682 9.709 4.682   c5.042 0 7.74-2.705 9.709-4.682c1.864-1.857 2.941-2.828 5.285-2.828c2.343 0 3.427 0.971 5.285 2.836   c1.969 1.969 4.667 4.674 9.716 4.674c5.049 0 7.74-2.705 9.709-4.674c1.864-1.865 2.94-2.836 5.284-2.836   c2.351 0 3.42 0.971 5.291 2.836c1.97 1.969 4.668 4.674 9.717 4.674c5.05 0 7.74-2.705 9.711-4.674   c1.869-1.865 2.953-2.836 5.298-2.836v-6.257C84.95 40.042 82.245 42.733 80.282 44.709 M44.989 47.545   c-2.344 0-3.434-0.971-5.292-2.835c-1.608-1.615-3.722-3.683-7.195-4.398c1.182-5.816 6.335-10.208 12.493-10.208   c6.165 0 11.317 4.392 12.499 10.202c-3.485 0.709-5.612 2.79-7.229 4.405C48.416 46.574 47.332 47.545 44.989 47.545" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 114.43836975097656)" stroke-width="1" data-uid="o-3b151f50e7e3438e9f03d693fda785a9"></path>
                            <path id="_cY9LYUXo6gzwjeTiKhfMB" fill="#ef8b52" d="M74.99 74.757c-2.344 0-3.434-0.972-5.292-2.836c-1.97-1.978-4.667-4.675-9.716-4.675   c-5.043 0-7.74 2.697-9.717 4.675c-1.851 1.864-2.935 2.836-5.278 2.836c-2.344 0-3.427-0.972-5.292-2.836   c-1.963-1.978-4.661-4.675-9.709-4.675c-5.042 0-7.74 2.697-9.709 4.675c-1.858 1.864-2.941 2.836-5.285 2.836   c-2.337 0-3.42-0.972-5.285-2.836C7.74 69.943 5.048 67.246 0 67.246v6.263c2.344 0 3.42 0.966 5.285 2.83   c1.97 1.976 4.661 4.675 9.709 4.675c5.042 0 7.74-2.699 9.709-4.675c1.864-1.864 2.941-2.83 5.285-2.83   c2.343 0 3.427 0.966 5.285 2.83c1.969 1.976 4.667 4.675 9.716 4.675c5.049 0 7.74-2.699 9.709-4.675   c1.864-1.864 2.94-2.83 5.284-2.83c2.351 0 3.427 0.966 5.291 2.83c1.97 1.976 4.668 4.675 9.717 4.675   c5.05 0 7.748-2.699 9.717-4.675c1.863-1.864 2.947-2.83 5.292-2.83v-6.263c-5.049 0-7.754 2.697-9.717 4.675   C78.418 73.785 77.335 74.757 74.99 74.757" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 115.5868148803711)" stroke-width="1" data-uid="o-0e0e0868bd904eb6a2f52f0b90817de9"></path>
                            <path id="_b3za9aX5DBfgGfzKDmRKX" transform="matrix(-0.9577297568321228, -1.659311294555664, 1.659311294555664, -0.9577297568321228, 230.21401977539062, 208.0660400390625)" fill="#ef8b52" stroke="none" stroke-width="1" data-type="rect" data-x="22.447" data-y="12.365" data-width="13.591" data-height="6.262" d="M22.447 12.365H36.038 V18.627 H22.447 Z" data-uid="o-91a37616d68646f8b15462601e131d64"></path>
                            <path id="_SCFls9d-XtAMrV_LEMcJO" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.63893127441406, 115.24493408203125)" stroke-width="1" data-type="polygon" d="M25.163 27.72L13.399 20.925L10.268 26.348L22.032 33.136Z" data-uid="o-2614544e493d4e39bd0c555152e446d3"></path>
                            <path id="_5GJXNIR8QyQ6iwTfFc9fZ" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 172.4427490234375, 115.28133392333984)" stroke-width="1" data-type="polygon" d="M67.979 33.123L79.736 26.328L76.6 20.906L64.848 27.707Z" data-uid="o-cd09edcee699458cb2369764e531c4c7"></path>
                            <path id="_z5QN35pgYoyq6H7TMzNyf" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 170.9147186279297, 115.02668762207031)" stroke-width="1" data-type="polygon" d="M60.068 22.934L66.861 11.17L61.439 8.039L54.646 19.809Z" data-uid="o-8efdf48d720f426a82191c9cbf459cee"></path>
                            <path id="_UWGDpojGedWgerfRtSKxq" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 170.48365783691406, 115.1512222290039)" stroke-width="1" data-type="polygon" d="M48.127 18.063L48.127 4.474L41.871 4.474L41.877 18.063Z" data-uid="o-cb9bbad488a745f58954b09680d235f9"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12 mx-auto">

                <a href="/" class="text-sm font-semibold leading-6 text-neutral-900">Home</a>
                <a href="/tour/search" class="text-sm font-semibold leading-6 text-neutral-900">Search</a>

            </div>
        </nav>
    </header>
    <main>
        <section class="w-full px-24">
            <div class="flex flex-col max-w-md mx-auto mt-24">
                <svg class="mx-auto h-16 w-auto" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" style="overflow: visible;">
                    <g id="_18ZIHszQpP9saEnfzVKD2" transform="matrix(2.936794295005337, 0, 0, 2.936794295005337, -499.95161681594993, -323.31145238989086)" data-uid="o-5efaf2f44c0e4df2987df8b1e4dc1cec">
                        <path id="_kYXqDcnwfY8DJYFiTRdg-" fill="#04bfab" d="M74.99 61.26c-2.344 0-3.434-0.979-5.292-2.83c-1.97-1.976-4.667-4.681-9.716-4.681   c-5.043 0-7.74 2.705-9.717 4.681c-1.851 1.853-2.935 2.83-5.278 2.83c-2.344 0-3.427-0.979-5.292-2.83   c-1.963-1.976-4.661-4.681-9.709-4.681c-5.042 0-7.74 2.705-9.709 4.681c-1.858 1.853-2.941 2.83-5.285 2.83   c-2.337 0-3.42-0.972-5.285-2.83C7.74 56.454 5.048 53.749 0 53.749v6.257c2.344 0 3.42 0.979 5.285 2.842   c1.97 1.963 4.661 4.668 9.709 4.668c5.042 0 7.74-2.705 9.709-4.668c1.864-1.863 2.941-2.842 5.285-2.842   c2.343 0 3.427 0.979 5.285 2.842c1.969 1.978 4.667 4.668 9.716 4.668c5.049 0 7.74-2.69 9.709-4.668   c1.864-1.863 2.94-2.842 5.284-2.842c2.351 0 3.427 0.979 5.291 2.842c1.97 1.978 4.668 4.668 9.717 4.668   c5.05 0 7.748-2.69 9.717-4.668c1.863-1.863 2.947-2.842 5.292-2.842v-6.257c-5.049 0-7.754 2.705-9.717 4.681   C78.418 60.281 77.335 61.26 74.99 61.26" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 114.62395477294922)" stroke-width="1" data-uid="o-1f5de7ca2b64454caee5f50de1b10789"></path>
                        <path id="_PCL-olsev6tZtyZjtKB5G" fill="#ef8b52" d="M80.282 44.709c-1.864 1.865-2.947 2.835-5.292 2.835c-2.344 0-3.428-0.971-5.292-2.835   c-1.392-1.392-3.15-3.118-5.822-4.031c-1.09-9.453-9.132-16.832-18.881-16.832c-9.742 0-17.784 7.372-18.874 16.826   c-2.679 0.906-4.458 2.646-5.849 4.037c-1.852 1.865-2.941 2.835-5.278 2.835s-3.42-0.971-5.285-2.835   C7.74 42.733 5.048 40.042 0 40.042v6.257c2.344 0 3.42 0.971 5.285 2.828c1.963 1.977 4.661 4.682 9.709 4.682   c5.042 0 7.74-2.705 9.709-4.682c1.864-1.857 2.941-2.828 5.285-2.828c2.343 0 3.427 0.971 5.285 2.836   c1.969 1.969 4.667 4.674 9.716 4.674c5.049 0 7.74-2.705 9.709-4.674c1.864-1.865 2.94-2.836 5.284-2.836   c2.351 0 3.42 0.971 5.291 2.836c1.97 1.969 4.668 4.674 9.717 4.674c5.05 0 7.74-2.705 9.711-4.674   c1.869-1.865 2.953-2.836 5.298-2.836v-6.257C84.95 40.042 82.245 42.733 80.282 44.709 M44.989 47.545   c-2.344 0-3.434-0.971-5.292-2.835c-1.608-1.615-3.722-3.683-7.195-4.398c1.182-5.816 6.335-10.208 12.493-10.208   c6.165 0 11.317 4.392 12.499 10.202c-3.485 0.709-5.612 2.79-7.229 4.405C48.416 46.574 47.332 47.545 44.989 47.545" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 114.43836975097656)" stroke-width="1" data-uid="o-3b151f50e7e3438e9f03d693fda785a9"></path>
                        <path id="_cY9LYUXo6gzwjeTiKhfMB" fill="#ef8b52" d="M74.99 74.757c-2.344 0-3.434-0.972-5.292-2.836c-1.97-1.978-4.667-4.675-9.716-4.675   c-5.043 0-7.74 2.697-9.717 4.675c-1.851 1.864-2.935 2.836-5.278 2.836c-2.344 0-3.427-0.972-5.292-2.836   c-1.963-1.978-4.661-4.675-9.709-4.675c-5.042 0-7.74 2.697-9.709 4.675c-1.858 1.864-2.941 2.836-5.285 2.836   c-2.337 0-3.42-0.972-5.285-2.836C7.74 69.943 5.048 67.246 0 67.246v6.263c2.344 0 3.42 0.966 5.285 2.83   c1.97 1.976 4.661 4.675 9.709 4.675c5.042 0 7.74-2.699 9.709-4.675c1.864-1.864 2.941-2.83 5.285-2.83   c2.343 0 3.427 0.966 5.285 2.83c1.969 1.976 4.667 4.675 9.716 4.675c5.049 0 7.74-2.699 9.709-4.675   c1.864-1.864 2.94-2.83 5.284-2.83c2.351 0 3.427 0.966 5.291 2.83c1.97 1.976 4.668 4.675 9.717 4.675   c5.05 0 7.748-2.699 9.717-4.675c1.863-1.864 2.947-2.83 5.292-2.83v-6.263c-5.049 0-7.754 2.697-9.717 4.675   C78.418 73.785 77.335 74.757 74.99 74.757" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.1951141357422, 115.5868148803711)" stroke-width="1" data-uid="o-0e0e0868bd904eb6a2f52f0b90817de9"></path>
                        <path id="_b3za9aX5DBfgGfzKDmRKX" transform="matrix(-0.9577297568321228, -1.659311294555664, 1.659311294555664, -0.9577297568321228, 230.21401977539062, 208.0660400390625)" fill="#ef8b52" stroke="none" stroke-width="1" data-type="rect" data-x="22.447" data-y="12.365" data-width="13.591" data-height="6.262" d="M22.447 12.365H36.038 V18.627 H22.447 Z" data-uid="o-91a37616d68646f8b15462601e131d64"></path>
                        <path id="_SCFls9d-XtAMrV_LEMcJO" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 171.63893127441406, 115.24493408203125)" stroke-width="1" data-type="polygon" d="M25.163 27.72L13.399 20.925L10.268 26.348L22.032 33.136Z" data-uid="o-2614544e493d4e39bd0c555152e446d3"></path>
                        <path id="_5GJXNIR8QyQ6iwTfFc9fZ" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 172.4427490234375, 115.28133392333984)" stroke-width="1" data-type="polygon" d="M67.979 33.123L79.736 26.328L76.6 20.906L64.848 27.707Z" data-uid="o-cd09edcee699458cb2369764e531c4c7"></path>
                        <path id="_z5QN35pgYoyq6H7TMzNyf" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 170.9147186279297, 115.02668762207031)" stroke-width="1" data-type="polygon" d="M60.068 22.934L66.861 11.17L61.439 8.039L54.646 19.809Z" data-uid="o-8efdf48d720f426a82191c9cbf459cee"></path>
                        <path id="_UWGDpojGedWgerfRtSKxq" fill="#ef8b52" stroke="none" transform="matrix(1.9158425331115723, 0, 0, 1.9158425331115723, 170.48365783691406, 115.1512222290039)" stroke-width="1" data-type="polygon" d="M48.127 18.063L48.127 4.474L41.871 4.474L41.877 18.063Z" data-uid="o-cb9bbad488a745f58954b09680d235f9"></path>
                    </g>
                </svg>
                <form class="space-y-6" action="/auth/login/proses-login.php" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-jaffa-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-jaffa-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-jaffa-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-jaffa-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-jaffa-600">Sign in</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Belum punya akun?
                    <a href="/auth/register" class="font-semibold leading-6 text-jaffa-600 hover:text-jaffa-500">Register</a>
                </p>
            </div>
        </section>
    </main>
</body>

</html>
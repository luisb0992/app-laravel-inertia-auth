<template>
    <div>
        <header class="max-w-lg mx-auto">
            <a href="#">
                <h1 class="text-4xl font-bold text-white text-center mt-5">Laravel Inertia Auth</h1>
            </a>
        </header>

        <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-4 rounded-lg shadow-2xl">
            <flash-messages />
            <slot name="toolbar" /> <!-- slot del toolbar en js/pages/auth/login -->
            <section class="mt-4">
                <slot /> <!-- slot por defecto, pude ser cualquier cosa que venga sin un # -->
            </section>
        </main>

        <div class="max-w-lg mx-auto text-center mt-12 mb-6">
            <slot name="footer" /> <!-- slot del footer en js/pages/auth/login -->
        </div>
    </div>
</template>

<script>
    import FlashMessages from "../Components/UI/FlashMessages";
    export default {
        name: "AuthLayout",
        components: {FlashMessages},
    };
</script>

<template>
    <div
        class="relative z-50"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true"
    >
        <transition
            enter-active-class="duration-300 ease-out"
            enter-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="duration-200 ease-in"
            leave-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div
                v-show="$page.props.flash.success && show"
                class="fixed inset-0 transition-opacity bg-gray-500/20 backdrop-blur-sm"
            ></div>
        </transition>

        <transition
            enter-active-class="duration-300 ease-out"
            enter-class="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
            enter-to-class="translate-y-0 opacity-100 sm:scale-100"
            leave-active-class="duration-200 ease-in"
            leave-class="translate-y-0 opacity-100 sm:scale-100"
            leave-to-class="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        >
            <div
                v-show="$page.props.flash.success && show"
                class="fixed inset-0 z-50 overflow-y-auto"
            >
                <div
                    class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0"
                >
                    <div
                        class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-sm sm:p-6"
                    >
                        <div>
                            <div
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-emerald-100"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-10 h-10 text-emerald-500"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
                                    />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3
                                    class="text-base font-semibold leading-6 text-gray-900"
                                    id="modal-title"
                                >
                                    Success Message
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        {{ $page.props.flash?.success }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <button
                                @click="show = false"
                                type="button"
                                class="inline-flex justify-center px-6 py-2 mx-auto text-sm font-semibold border border-gray-200 rounded-lg"
                            >
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
        };
    },
    watch: {
        "$page.props.flash": {
            handler() {
                this.show = true;

                setTimeout(() => {
                    this.show = false;
                }, 3000);
            },
            deep: true,
        },
    },
};
</script>

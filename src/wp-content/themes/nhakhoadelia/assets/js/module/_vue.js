import Vue from 'vue';
import VueJsModal from 'vue-js-modal';

import menu from "./mixins/menu.js";
import anchorLink from "./mixins/anchorLink.js";
import dropDown from "./mixins/dropDown.js";

Vue.use(VueJsModal)

Vue.config.devtools = true;

import DemoLoginModal from './components/modals/DemoLoginModal';
import DemoAdaptiveModal from './components/modals/Modal_Adaptive';
import CustomComponentModal from './components/modals/CustomComponentModal';
import ActiveModal from './components/modals/ActiveModal';

'use strict';

const app = new Vue({
    el: '#app',
    components: {
        DemoLoginModal,
        DemoAdaptiveModal,
        CustomComponentModal,
        ActiveModal
    },
    data: {
        window: {
            width: 0,
            height: 0
        },
    },
    mixins: [
        menu,
        anchorLink,
        dropDown
    ],
    methods: {

        //Event detect window.width when reize screen
        handleResize: function () {
            this.window.width = window.innerWidth;
            this.window.height = window.innerHeight;
        }

    },

    mounted: function () {
        //this.$modal.show('example-active-modal');
    },

    created: function () {
        window.addEventListener('resize', this.handleResize)
        this.handleResize();
    },

    destroyed: function () {
        window.removeEventListener('resize', this.handleResize)
    },

    computed: {
    }
})
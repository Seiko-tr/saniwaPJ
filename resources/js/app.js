import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue";
import App from "./App.vue";
import router from './router';
// Vue Routerを使用する場合はrouter.jsを作成しインポートする
// import router from "./router";
// Vuexをを使用する場合はstoreフォルダ以下にファイルを作成しインポートする
// import store from "./store";

createApp(App).use(router).mount('#app')
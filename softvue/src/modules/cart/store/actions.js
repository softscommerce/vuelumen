const actions = {
    async getData({commit }) {
        const data = await fetch('https://api.coincap.io/v2/assets');
        commit('SET_DATA', await data.json());
    },
}
export default actions;
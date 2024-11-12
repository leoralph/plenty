const chart = {
    init() {
        chart = this.initChart();
    },

    destroy() {
        chart.destroy();
    },

    initChart() {
        const { element, type } = config;
        const el = this.$wire.$el.querySelector("canvas#" + element);

        const { labels, datasets } = dataset;
        return new Chart(el, {
            type: type,
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: options,
        });
    },
};

export { chart };

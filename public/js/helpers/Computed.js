export default class Computed {
    constructor(computeFn, dependencies) {
        this.computeFn = computeFn;
        this.dependencies = dependencies;
        this._listeners = [];

        dependencies.forEach(dep => {
            dep.subscribe(() => this._notify());
        });
    }

    get value() {
        return this.computeFn();
    }

    _notify() {
        this._listeners.forEach(listener => listener(this.value));
    }

    subscribe(listener) {
        this._listeners.push(listener);
    }
}

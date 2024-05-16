export default class Reactive {
    constructor(initialValue) {
        this._value = initialValue;
        this._listeners = [];
    }

    get value() {
        return this._value;
    }

    set value(newValue) {
        this._value = newValue;
        this._listeners.forEach(listener => listener(newValue));
    }

    subscribe(listener) {
        this._listeners.push(listener);
    }
}

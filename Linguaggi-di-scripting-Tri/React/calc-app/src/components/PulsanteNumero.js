import React from "react";

class PulsanteNumero extends React.Component {
    render() {
        const onClickNumero = function () {
            console.dir(this.props);
        }
        return (<button onClick={onClickNumero} className="w-100 btn btn-light">{this.props.label}</button>);
    }
}

export default PulsanteNumero;
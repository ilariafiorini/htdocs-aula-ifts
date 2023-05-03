import React from "react";

class Display extends React.Component {
    render() {
        return (<div className="col-12 text-bg-dark p-3 text-end">
            <div className="fs-5">
                {this.props.operatore === null ? "0" : this.props.operatore} {this.props.azione}
            </div>
            <div className="fs-1">
                {this.props.risultato}
            </div>
        </div>);
    }
}

export default Display;
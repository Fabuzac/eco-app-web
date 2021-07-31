import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Awesome Chart React component</div>

                        <div className="card-body">Temperature comparison chart for the year 2019 in France</div>
                    </div>
                </div>
            </div>
        </div>
    ); 
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

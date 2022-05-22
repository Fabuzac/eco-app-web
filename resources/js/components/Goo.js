import React from 'react';
import ReactDOM from 'react-dom';

class Goo extends React.Component {
  render() {
    
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                      <h1 className='text-primary'>FOO BAR</h1>
                    </div>
                </div>
            </div>
        </div>
    ); 
  }
}

export default Goo;


if (document.getElementById('goo')) {
  ReactDOM.render(<Goo />, document.getElementById('goo'));
}
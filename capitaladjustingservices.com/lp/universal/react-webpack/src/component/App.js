import React, { Component } from 'react';

class App extends Component {

    render(){
        return(
            <div>
            <h1>ReactDOM</h1>
            <h1>Harvard Maths Webpack Loaders</h1>
            <div className="css-div">
            <p>
                This is a CSS Loaded Content
            </p>
            </div>
            <div className="sass-div">
            <p>
                This is a SASS Loaded Content
            </p>
            </div>
            <div id="test-div">
            <p>
                This is Less Style Loaded Content
            </p>
            </div>
        </div>
        )
    }
}

export default App;
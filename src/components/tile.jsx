import React, { Component } from "react";

export default class Tile extends Component {
  state = {
    title: "Hello"
  };
  render() {
    return (
      <div className="col s12 m4">
        <div className="card small hovering">
          <a href="#">
            <div className="card-image">
              <img src="images/achievement.jpg" alt={this.state.title} />
            </div>
            <div className="card-content">
              <p>{this.state.title}</p>
            </div>
          </a>
        </div>
      </div>
    );
  }
}

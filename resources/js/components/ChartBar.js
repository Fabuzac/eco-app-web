import React, { useState, useEffect } from "react";
import { Bar } from "react-chartjs-2";
import axios from "axios";
import ReactDOM from 'react-dom';

const ChartBar = () => {
  const [chartData, setChartData] = useState({});

  const chart = () => {
    let months = [];
    let years = [];
    let averageDegree = [];
    let minDegree = [];
    let maxDegree = [];
    
    axios.get("/api/data-fr")
      .then(response => {
        console.log("Response status " + response.status);
        
        for (const dataObj of response.data) {
          months.push(dataObj.months);
          years.push(dataObj.years);
          averageDegree.push(dataObj.average_degree);
          minDegree.push(dataObj.min_degree);
          maxDegree.push(dataObj.max_degree);
        }       
        // CHART DATA
        setChartData({
          labels: months,
          datasets: [
            {
              label: "Average Degree",
              data: averageDegree,
              fill: true,
              lineTension: 0.1,
              backgroundColor: 'rgba(252,159,3,0.4)',
              borderColor: 'rgba(57, 97, 171, 1)',
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: 'rgba(36, 58, 97, 1)',
              pointBackgroundColor: '#fff',
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: 'rgba(75,192,192,1)',
              pointHoverBorderColor: 'rgba(220,220,220,1)',
              pointHoverBorderWidth: 2,
              pointRadius: 1,
              pointHitRadius: 10,
            },
            {
              label: "Max Degree",
              data: maxDegree,
              fill: false,
              borderColor: "#742774",
              backgroundColor: "rgba(153, 0, 0, 1)"
            },
            {
              label: "Min Degree",
              data: minDegree,
              fill: false,
              borderColor: "rgba(57, 97, 171, 0,4)",
              backgroundColor: "rgba(57, 97, 171, 1)"
            }
          ]
        });
      })
      .catch(error => {
        console.error(error);
      });
  };

  useEffect(() => {
    chart();
  }, []);
  return (
    <div className="App">      
      <div>
        
        <Bar
          data={chartData}
          options={{
            responsive: true,            
            scales: {
              yAxes: [
                {
                  ticks: {
                    autoSkip: true,
                    maxTicksLimit: 10,
                    beginAtZero: true
                  },
                  gridLines: {
                    display: false
                  }
                }
              ],
              xAxes: [
                {
                  gridLines: {
                    display: false
                  }
                }
              ]
            }
          }}
        />
      </div>
    </div>
  );
};

export default ChartBar;

if (document.getElementById('ChartBar')) {
    ReactDOM.render(<ChartBar />, document.getElementById('ChartBar'));
  }
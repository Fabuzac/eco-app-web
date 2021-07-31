import React, { useState, useEffect } from "react";
import { Line } from "react-chartjs-2";
import axios from "axios";
import ReactDOM from 'react-dom';

const ChartLine = () => {
  const [chartData, setChartData] = useState({});

  const chart = () => {
    let months = [];
    let years = [];
    let averageDegree = [];
    let minDegree = [];
    let maxDegree = [];
    
    axios.get("/api")
      .then(response => {
        console.log("Response status " + response.status);
        //console.log(response.config);
        
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
              fill: false,
              lineTension: 0.1,
              backgroundColor: 'rgba(252,159,3,0.4)',
              borderColor: 'rgba(252,159,3,0.4)',
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: 'rgba(36, 58, 97, 1)',
              pointBackgroundColor: '#fff',
              pointBorderWidth: 2,
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
              borderColor: "rgba(153, 0, 0, 1)"
            },
            {
              label: "Min Degree",
              data: minDegree,
              fill: true,
              borderColor: "rgba(57, 97, 171, 1)"
            }
          ]
        });
      })
      .catch(error => {
        console.error(error);
      });

    
    //console.log(months, years, averageDegree, minDegree, maxDegree);
  };

  useEffect(() => {
    chart();
  }, []);
  return (
    <div className="App">      
      <div>
        <h4 className="black text-center m-4">France temperature 2019</h4>
        <Line
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
            },
            options: {
              
            }
          }}
        />
      </div>
    </div>
  );
};

export default ChartLine;

if (document.getElementById('ChartLine')) {
    ReactDOM.render(<ChartLine />, document.getElementById('ChartLine'));
  }
 

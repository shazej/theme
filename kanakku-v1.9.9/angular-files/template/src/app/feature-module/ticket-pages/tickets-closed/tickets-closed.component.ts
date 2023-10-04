import { Component } from '@angular/core';
import { Sort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { routes } from 'src/app/core/helpers/routes/routes';
import { apiResultFormat, pageSelection, ticketsclosed } from 'src/app/core/models/models';
import { DataService } from 'src/app/core/services/data/data.service';

@Component({
  selector: 'app-tickets-closed',
  templateUrl: './tickets-closed.component.html',
  styleUrls: ['./tickets-closed.component.scss']
})
export class TicketsClosedComponent {
  public routes = routes
  myDateValue!: Date;
  priority = 'priority1';
  status = 'status1'
  sort = "sort1"
   public tickets: Array<ticketsclosed> = [];
  country = 'India';
  isCollapsed = false;
  public Toggledata  = false;
  Action ='status'
  public minDate!: Date;
  public maxDate!: Date;
  
  
  dataSource!: MatTableDataSource<ticketsclosed>;
  public searchDataValue = '';
  // pagination variables
  public lastIndex = 0;
  public pageSize = 10;
  public totalData = 0;
  public skip = 0;
  public limit: number = this.pageSize;
  public pageIndex = 0;
  public serialNumberArray: Array<number> = [];
  public currentPage = 1;
  public pageNumberArray: Array<number> = [];
  public pageSelection: Array<pageSelection> = [];
  public totalPages = 0;
  //** / pagination variables
  

  constructor(private data: DataService) {}

  ngOnInit(): void {
    this.getTableData();
  }
  private getTableData(): void {
    this.tickets = [];
    this.serialNumberArray = [];

    this.data.getTicketclosed().subscribe((data: apiResultFormat) => {
      this.totalData = data.totalData;
      data.data.map((res: ticketsclosed, index: number) => {
        const serialNumber = index + 1;
        if (index >= this.skip && serialNumber <= this.limit) {
          res.ticketsclosed = serialNumber;
          this.tickets.push(res);
          this.serialNumberArray.push(serialNumber);
        }
      });
      this.dataSource = new MatTableDataSource<ticketsclosed>(this.tickets);
      this.calculateTotalPages(this.totalData, this.pageSize);
    });
  }
  // eslint-disable-next-line @typescript-eslint/no-explicit-any
  public searchData(value: any): void {
    this.dataSource.filter = value.trim().toLowerCase();
    this.tickets = this.dataSource.filteredData;
  }
  
  
  public sortData(sort: Sort) {
    const data = this.tickets.slice();

    if (!sort.active || sort.direction === '') {
      this.tickets = data;
    } else {
      this.tickets = data.sort((a, b) => {
        // eslint-disable-next-line @typescript-eslint/no-explicit-any
        const aValue = (a as any)[sort.active];
        // eslint-disable-next-line @typescript-eslint/no-explicit-any
        const bValue = (b as any)[sort.active];
        return (aValue < bValue ? -1 : 1) * (sort.direction === 'asc' ? 1 : -1);
      });
    }
  }
  public getMoreData(event: string): void {
    if (event == 'next') {
      this.currentPage++;
      this.pageIndex = this.currentPage - 1;
      this.limit += this.pageSize;
      this.skip = this.pageSize * this.pageIndex;
      this.getTableData();
    } else if (event == 'previous') {
      this.currentPage--;
      this.pageIndex = this.currentPage - 1;
      this.limit -= this.pageSize;
      this.skip = this.pageSize * this.pageIndex;
      this.getTableData();
    }
  }
  public moveToPage(pageNumber: number): void {
    this.currentPage = pageNumber;
    this.skip = this.pageSelection[pageNumber - 1].skip;
    this.limit = this.pageSelection[pageNumber - 1].limit;
    if (pageNumber > this.currentPage) {
      this.pageIndex = pageNumber - 1;
    } else if (pageNumber < this.currentPage) {
      this.pageIndex = pageNumber + 1;
    }
    this.getTableData();
  }
  public PageSize(): void {
    this.pageSelection = [];
    this.limit = this.pageSize;
    this.skip = 0;
    this.currentPage = 1;
    this.getTableData();
  }
  private calculateTotalPages(totalData: number, pageSize: number): void {
    this.pageNumberArray = [];
    this.totalPages = totalData / pageSize;
    if (this.totalPages % 1 != 0) {
      this.totalPages = Math.trunc(this.totalPages + 1);
    }
    for (let i = 1; i <= this.totalPages; i++) {
      const limit = pageSize * i;
      const skip = limit - pageSize;
      this.pageNumberArray.push(i);
      this.pageSelection.push({ skip: skip, limit: limit });
    }
  }
  open() {
    this.Toggledata = !this.Toggledata;
   
  }
  users = [
    { name: 'Barbara Moore', checked: false },
    { name: 'Hendry Evan', checked: false },
    { name: 'Richard Miles', checked: false }
  ];
  
  toggleCollapse() {
    this.isCollapsed = !this.isCollapsed;
  }

}

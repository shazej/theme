import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TicketsListCancelledComponent } from './tickets-list-cancelled.component';

describe('TicketsListCancelledComponent', () => {
  let component: TicketsListCancelledComponent;
  let fixture: ComponentFixture<TicketsListCancelledComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TicketsListCancelledComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TicketsListCancelledComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
